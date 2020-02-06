<?php

namespace Modules\Absen\Entities;

use Illuminate\Database\Eloquent\Model;

class Sprint extends Model
{
    //
    protected $table = 'sprint';

    
    public function absenceLog()
    {
        return $this->hasMany('Modules\Absen\Entities\LogAbsence', 'id', 'sprint_id');
            
    }
}
