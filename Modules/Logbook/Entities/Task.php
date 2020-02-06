<?php

namespace Modules\Logbook\Entities;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	protected $table = 'task';

    public function sprint(){
    	return $this->belongTo('Modules\Logbook\Entities\Sprint');
    }

    public function logproject() {
    	return $this->hasMany('Modules\Logbook\Entities\Logproject');
    }

    public function log_project_task()
    {
    	return $this->hasMany(LogprojectTask::class);
    }
}
