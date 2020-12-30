<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/mahasiswa/index');
    }

    public function data()
    {
        $mahasiswa = Mahasiswa::orderBy('id', 'DESC')->get();
        $no = 1;
        foreach ($mahasiswa as $item) {
            $output = '<tr >
             <td>' . $no++ . '</td>
             <td>' . $item->user->name . '</td>
             <td>' . $item->user->nim . '</td>
             <td> <a href=' . $item->takeimage . ' data-fancybox="gallery" data-caption=' . $item->name . ' ><img src=' . $item->takeimage . ' alt="avatar" style="max-width: 100px"></a></td>
             <td>' . $item->status . '</td>
             <td>' . $item->verified_at . '</td>
             <td>';

            if ($item->status == 'terverifikasi' || $item->status == 'voted') {
                $output .= '<div class=" text-center"><i class="fa fa-check"></i></div></td>';
            } else {
                $output .= '
                <div class=" text-center"><button class="btn-verif btn btn-primary" type="button" data-id=' . $item->id . '>Verif</button>
                <button class="btn-delete btn btn-danger" type="button" data-id=' . $item->id . '>Hapus</button></div>
                </td>';
            };
            echo $output;
        };
    }

    public function verif(Request $request, Mahasiswa $mahasiswa)
    {
        $mahasiswa->status = 'terverifikasi';
        $mahasiswa->verified_at = date('Y-m-d');
        $mahasiswa->update();
        // dd($mahasiswa);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        Storage::delete($mahasiswa->file_url);
    }
}
