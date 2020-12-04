<?php

namespace App\Http\Controllers;

use App\Models\Calon;
use App\Models\Mahasiswa;
use App\Models\Suara;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{

    public function index()
    {
        $id_user = Auth::id();
        $smft = Calon::where('jenis_calon', 'SMFT')->get();
        $bpmft = Calon::where('jenis_calon', 'BPMFT')->get();
        $mahasiswa = Mahasiswa::where('user_id', $id_user)->get()->first();
        $ti = User::select('users.prodi_id', 'suaras.calon_id')
            ->join('mahasiswas', 'users.id', '=', 'mahasiswas.user_id')
            ->join('suaras', 'mahasiswas.id', '=', 'suaras.mahasiswa_id')
            ->where('users.prodi_id', 5)
            ->where('suaras.calon_id', 5)
            ->get()->count();
        if (Auth::user()) {
            $suara = Suara::where('mahasiswa_id', $mahasiswa->id)->get();
            return view('index', ['smft' => $smft, 'bpmft' => $bpmft, 'suara' => $suara, 'mahasiswa' => $mahasiswa, 'ti' => $ti]);
        } else {
            return view('index', ['smft' => $smft, 'bpmft' => $bpmft,  'mahasiswa' => $mahasiswa]);
        }
    }


    public function misi(Request $request)
    {
        $calonid = $request->id;
        $visi = Calon::where('id', $calonid)->get();
        foreach ($visi as $item) {
            $output = '<div class="feature-box feature-box-style-2">
     <div class="feature-box-icon">
         <i class="icons icon-list "></i>
     </div>
     <div class="feature-box-info">
         <h4 class="font-weight-bold  text-4 mb-2">VISI</h4>
         <p id="text-misi" class=" opacity-7 text-justify">'
                . $item->misi .
                '</p>
     </div>
 </div>
 <div class="feature-box feature-box-style-2">
     <div class="feature-box-icon">
         <i class="icons icon-plus "></i>
     </div>
     <div class="feature-box-info">
         <h4 class="font-weight-bold  text-4 mb-2">MISI</h4>
         <p class=" opacity-7 text-justify">'
                . $item->visi .
                '</p>
     </div>
 </div>';
            echo ($output);
            // return \json_encode($visi);
        }
    }

    public function vote(Request $request)
    {
        // $this->validate($request, [
        //     'calon_smft' => 'required',
        //     'calon_bpmft' => 'required',
        // ]);

        // dd($request);
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
        $arr['smft'] = Suara::with(['calons' => function ($query) {
            $query->where('jenis_calon', 'SMFT');
        }])->get();
        $arr['bpmft'] = Suara::with(['calons' => function ($query) {
            $query->where('jenis_calon', 'BPMFT');
        }])->get();

        return \json_encode($arr);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth');
    }
}
