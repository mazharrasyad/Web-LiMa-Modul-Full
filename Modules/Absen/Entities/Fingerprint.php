<?php

namespace Modules\Absen\Entities;

use Illuminate\Database\Eloquent\Model;

class Fingerprint extends Model
{
    //
    protected $table = 'fingerprint';
    protected $fillable = ['kode_pin'];

}
