<?php

namespace App\Http\Controllers;

use App\Models\Calon;
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
        return view('calon', ['calon' => $calon]);
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
        $this->validate($request, [
            'user_id' => 'required',
            'nama_panggilan' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'jenis_calon' => 'required',
            'photo_url' => 'required|file|max:2000'
        ]);

        $calon = new Calon;

        $calon->user_id = $request->user_id;
        $calon->nama_panggilan = $request->nama_panggilan;
        $calon->visi = $request->visi;
        $calon->misi = $request->misi;
        $calon->jenis_calon = $request->jenis_calon;
        $calon->photo_url = $request->photo_url;

        $calon->save();

        return redirect('/calon');
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
        return view('calon_edit', ['calon' => $calon]);
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

        $calon->user_id = $request->user_id;
        $calon->nama_panggilan = $request->nama_panggilan;
        $calon->visi = $request->visi;
        $calon->misi = $request->misi;
        $calon->jenis_calon = $request->jenis_calon;
        $calon->photo_url = $request->photo_url;

        $calon->save();

        $slug = Str::slug($request->nama_panggilan);
        if ($request->file('photo_url')) {
            $photo = $request->file('photo_url');
            $photo->storeAs("img/calon", "{$slug}.{$photo->extension()}");
        }

        return redirect('/calon');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Calon  $calon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calon $calon)
    {
        $calon->delete();
        return redirect('/calon');
    }
}
