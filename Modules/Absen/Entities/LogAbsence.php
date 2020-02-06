<?php

namespace Modules\Absen\Entities;

use Illuminate\Database\Eloquent\Model;

class LogAbsence extends Model
{
    //
    protected $table = 'absence_log';
    protected $fillable = ['user_id','sprint_id','jam_mulai','jam_akhir','keterangan','nilai'];

    public function user()
    {
     return $this->belongsTo('Modules\Absen\Entities\User');
    }

    public function sprint()
    {
     return $this->belongsTo('Modules\Absen\Entities\Sprint');
    }

    public function kelompok()
    {
     return $this->belongsTo('Modules\Absen\Entities\Kelompok');
    }
}
