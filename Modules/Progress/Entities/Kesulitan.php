<?php

namespace Modules\Progress\Entities;

use Illuminate\Database\Eloquent\Model;

class Kesulitan extends Model
{
    protected $fillable = ['nama_tingkat', 'bobot'];

    public function task()
    {
    	return $this->hasMany('Modules\Progress\Entities\Task','kesulitan_id');
    }
}
