<?php

namespace App\Http\Controllers;

use App\Models\Calon;
use App\Models\Mahasiswa;
use App\Models\Prodi;
use App\Models\Suara;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{

    public function index()
    {
        $id_user = Auth::id();
        $smft = Calon::where('jenis_calon', 'SMFT')->get();
        $bpmft = Calon::where('jenis_calon', 'BPMFT')->get();
        $mahasiswa = Mahasiswa::where('user_id', $id_user)->get()->first();

        if (Auth::user()) {
            $suara = Suara::where('mahasiswa_id', $mahasiswa->id)->get();
            return view('index', ['smft' => $smft, 'bpmft' => $bpmft, 'suara' => $suara, 'mahasiswa' => $mahasiswa]);
        } else {
            return view('index', ['smft' => $smft, 'bpmft' => $bpmft,  'mahasiswa' => $mahasiswa]);
        }
    }


    public function misi(Request $request)
    {
        $calonid = $request->id;
        $visi = Calon::where('id', $calonid)->get();
        foreach ($visi as $item) {
            $output = '
            <div class="feature-box feature-box-style-2">
                <div class="feature-box-icon">
                    <i class="icons icon-list "></i>
                </div>
                <div class="feature-box-info">
                    <h4 class="font-weight-bold  text-4 mb-2">VISI</h4>
                    <div id="text-misi" class=" opacity-7 text-justify">'
                . $item->visi .

                '</div>
                </div>
            </div>
            <div class="feature-box feature-box-style-2">
                <div class="feature-box-icon">
                    <i class="icons icon-plus "></i>
                </div>
                <div class="feature-box-info">
                    <h4 class="font-weight-bold  text-4 mb-2">MISI</h4>
                    <div class=" opacity-7 text-justify">'
                . $item->misi .
                '</div>
                </div>
            </div>';
            echo ($output);
            // return \json_encode($visi);
        }
    }

    public function vote(Request $request)
    {
        $id_user = Auth::id();
        $mahasiswa = Mahasiswa::where('user_id', $id_user)->get()->first();
        $mahasiswa->id = $mahasiswa->id;
        $mahasiswa->status = 'voted';
        $mahasiswa->update();

        $suara_smft = new Suara();
        $suara_smft->mahasiswa_id = $mahasiswa->id;
        $suara_smft->calon_id = $request->smft;
        $suara_smft->save();

        $suara_bpmft = new Suara();
        $suara_bpmft->mahasiswa_id = $mahasiswa->id;;
        $suara_bpmft->calon_id = $request->bpmft;
        $suara_bpmft->save();
        return "Terima kasih telah memilih";
    }

    public function chart()
    {
        foreach (Calon::where('jenis_calon', 'SMFT')->cursor() as $calon_smft) {
            $prodis = [];
            $prodisValues = [];
            foreach (Prodi::cursor() as $prodi) {

                $jumlah = DB::table('suaras')
                    ->join('mahasiswas', 'suaras.mahasiswa_id', '=', 'mahasiswas.id')
                    ->join('users', 'mahasiswas.user_id', '=', 'users.id')
                    ->where('suaras.calon_id', '=', $calon_smft->id)
                    ->where('users.prodi_id', '=', $prodi->id)
                    ->get()->count();

                array_push($prodis, $prodi->nama_prodi);
                array_push($prodisValues, $jumlah);
            }
            $chart['SMFT'][$calon_smft->nama_panggilan]['prodis'] = $prodis;
            $chart['SMFT'][$calon_smft->nama_panggilan]['prodi_value'] = $prodisValues;
        }

        foreach (Calon::where('jenis_calon', 'BPMFT')->cursor() as $calon_bpmft) {
            $prodis = [];
            $prodisValues = [];
            foreach (Prodi::cursor() as $prodi) {
                $jumlah = DB::table('suaras')
                    ->join('mahasiswas', 'suaras.mahasiswa_id', '=', 'mahasiswas.id')
                    ->join('users', 'mahasiswas.user_id', '=', 'users.id')
                    ->where('suaras.calon_id', '=', $calon_bpmft->id)
                    ->where('users.prodi_id', '=', $prodi->id)
                    ->get()->count();

                array_push($prodis, $prodi->nama_prodi);
                array_push($prodisValues, $jumlah);
            }
            $chart['BPMFT'][$calon_bpmft->nama_panggilan]['prodis'] = $prodis;
            $chart['BPMFT'][$calon_bpmft->nama_panggilan]['prodi_value'] = $prodisValues;
        }

        return json_encode($chart);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth');
    }
}
