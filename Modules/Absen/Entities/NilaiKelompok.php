<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiKelompok extends Model
{
    //
    protected $table = 'nilai_kelompok';
    protected $fillable = ['nilai_kelompok','kelompok_id','sprint_id'];
}
