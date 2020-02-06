<?php

namespace Modules\Proyek\Entities;

use Illuminate\Database\Eloquent\Model;

class Membertim extends Model
{
    public $table = 'tim_member';

    protected $guarded = [];

    public function tim()
    {
        return $this->belongsTo(Tim::class);
    }

    public function peran()
    {
        return $this->belongsTo(Peran::class);
    }

    public function mahasiswa()
    {
        return $this->belongsTo('Modules\Absen\Entities\User'::class);
    }
}