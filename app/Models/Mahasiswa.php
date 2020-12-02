<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'prodi_id',
        'nim',
        'nama',
        'status',
        'verified_at',
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
