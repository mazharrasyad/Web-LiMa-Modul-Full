<?php

namespace Modules\Absen\Entities;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    //
    protected $table = 'prodi';
    protected $fillable = ['kode','nama'];

}
