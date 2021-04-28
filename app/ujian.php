<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ujian extends Model
{
    protected $fillable = ['nama_mk', 'dosen', 'jumlah_soal', 'keterangan'];
}