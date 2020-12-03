<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'verified_at',
    ];

    public function suaras()
    {
        return $this->hasMany('App\Models\Suara');
    }
}
