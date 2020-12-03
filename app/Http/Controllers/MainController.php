<?php

namespace App\Http\Controllers;

use App\Models\Calon;
use App\Models\Mahasiswa;
use App\Models\Suara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{

    public function index()
    {
        $id_user = Auth::id();
        $smft = Calon::where('jenis_calon', 'SMFT')->get();
        $bpmft = Calon::where('jenis_calon', 'BPMFT')->get();
        $mahasiswa = Mahasiswa::where('user_id',$id_user)->get()->first();
        $suara = Suara::with('calon')->get();

        return view('index', ['smft' => $smft, 'bpmft' => $bpmft, 'suara' => $suara, 'mahasiswa' => $mahasiswa]);
    }

    public function vote(Request $request)
    {
        // $this->validate($request, [
        //     'calon_smft' => 'required',
        //     'calon_bpmft' => 'required',
        // ]);

        // dd($request);
        $id_user = Auth::id();
        $mahasiswa = Mahasiswa::where('user_id',$id_user)->get()->first();
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

      

        \Session::flash('sukses','Data User Berhasil Di Tambahkan');
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
