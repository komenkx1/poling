<?php

namespace App\Http\Controllers;

use App\Models\Calon;
use App\Models\Suara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{

    public function index()
    {
        $smft = Calon::where('jenis_calon', 'SMFT')->get();
        $bpmft = Calon::where('jenis_calon', 'BPMFT')->get();
        return view('index', ['smft' => $smft, 'bpmft' => $bpmft]);
    }

    public function vote(Request $request)
    {
        // $this->validate($request, [
        //     'calon_smft' => 'required',
        //     'calon_bpmft' => 'required',
        // ]);

        // dd($request);

        $suara_smft = new Suara();
        $suara_smft->mahasiswa_id = 1;
        $suara_smft->calon_id = $request->smft;
        $suara_smft->save();

        $suara_bpmft = new Suara();
        $suara_bpmft->mahasiswa_id = 1;
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
