<?php

namespace Modules\Proyek\Entities;

use Eloquent as Model;

class Prodi extends Model
{
    public $table = 'prodi';

    public function tims()
    {
        return $this->hasMany(Tim::class, 'prodi_id', 'id');        
    }
}