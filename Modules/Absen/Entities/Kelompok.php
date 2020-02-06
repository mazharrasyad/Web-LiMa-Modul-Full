<?php

namespace Modules\Absen\Entities;

use Illuminate\Database\Eloquent\Model;

class Kelompok extends Model
{
    //
    protected $table = 'kelompok';


    public function user()
    {
        return $this->hasMany('Modules\Absen\Entities\User', 'id', 'user_id');
            
    }

    public function absenceLog()
    {
        return $this->hasMany('Modules\Absen\Entities\LogAbsence', 'id', 'user_id');
            
    }
}
