<?php

namespace Modules\Progress\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sprint extends Model
{
    use SoftDeletes;

    protected $table = 'sprint';

    protected $fillable = ['nama_sprint', 'desc_sprint', 'tgl_mulai', 'tgl_selesai'];

    public function task()
    {
    	return $this->hasMany('Modules\Progress\Entities\Task','sprint_id');
    }

    public function kesulitan()
    {
    	return $this->hasMany('Modules\Progress\Entities\Kesulitan','kesulitan_id');
    }
}
