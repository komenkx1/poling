<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calon extends Model
{
    use HasFactory;

    protected $fillable = [
        'prodi_id',
        'nama',
        'visi',
        'misi',
        'jenis_calon',
        'photo_url',
    ];

    public function prodi()
    {
        return $this->belongsTo('App\Models\Prodi');
    }

    public function suaras()
    {
        return $this->hasMany('App\Models\Suara');
    }
}
