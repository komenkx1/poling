<?php

namespace App\Http\Controllers;

use App\Models\Calon;
use App\Models\Prodi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CalonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calon = Calon::all();
        $prodi = Calon::with('prodi')->get();
        return view('admin/calon/index', [
            'calon' => $calon,
            'prodi' => $prodi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/calon/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_panggilan' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'jenis_calon' => 'required',
            'photo_url' => 'required|file|max:2000'
        ]);

        $calon = new Calon;
        $calon->user_id = User::select('id')->where('nim', $request->nim)->first()->id;
        $calon->nama_panggilan = $request->nama_panggilan;
        $calon->visi = $request->visi;
        $calon->misi = $request->misi;
        $calon->jenis_calon = $request->jenis_calon;

        $slug = Str::slug($request->nama_panggilan);
        if ($request->file('photo_url')) {
            $gambar = $request->file('photo_url');
            $urlgambar = $gambar->storeAs("img/calon", "{$slug}.{$gambar->extension()}");
            $calon->photo_url = $urlgambar;
        }
        // echo($userid);
        $calon->save();

        return redirect('admin/calon');
    }

    function fetch(Request $request)
    {
        if ($request->get('query')) {
            $query = $request->get('query');
            $data = User::select("nim", "name")
                ->where('nim', 'LIKE', "{$query}")
                ->get();
            $output = '<span>Mahasiswa : </span> <ul class="ids" style="display:block;width:100%;background-color:#f0f0f0;padding:5px;border-radius:5px;margin-bottom:10px;">';
            foreach ($data as $row) {
                $output .= '
                <li class="p-2 d-block"><a href="#" class="text-danger">' . $row->nim . " - " . $row->name . '</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Calon  $calon
     * @return \Illuminate\Http\Response
     */
    public function show(Calon $calon)
    {
        return view('calon_show', ['calon' => $calon]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Calon  $calon
     * @return \Illuminate\Http\Response
     */
    public function edit(Calon $calon)
    {
        $prodi = Calon::with('prodi')->get();
        return view('admin/calon/edit', [
            'calon' => $calon,
            'prodi' => $prodi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Calon  $calon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Calon $calon)
    {
        $this->validate($request, [
            'user_id' => 'required',
            'nama_panggilan' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'jenis_calon' => 'required',
            'photo_url' => 'required|file|max:2000'
        ]);


        $slug = Str::slug($request->nama_panggilan);
        if ($request->file('photo_url')) {
            \Storage::delete($calon->photo_url); // menghapus gambar atau file
            $gambar = $request->file('photo_url');
            $urlgambar = $gambar->storeAs("img/calon", "{$slug}.{$gambar->extension()}");
        } else {
            $gambar = $request->file('photo_url');
            $urlgambar = $gambar->storeAs("img/calon", "{$slug}.{$gambar->extension()}");
        }
        $calon->user_id = $request->user_id;
        $calon->nama_panggilan = $request->nama_panggilan;
        $calon->visi = $request->visi;
        $calon->misi = $request->misi;
        $calon->jenis_calon = $request->jenis_calon;
        $calon->photo_url = $urlgambar;
        $calon->update();
        return redirect('admin/calon');
        // dd($calon);



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Calon  $calon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calon $calon)
    {
        \Storage::delete($calon->photo_url);
        $calon->delete();
        return redirect('/admin/calon');
    }
}
