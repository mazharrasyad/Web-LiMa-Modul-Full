<?php

namespace Modules\Logbook\Entities;

use Illuminate\Database\Eloquent\Model;

class Sprint extends Model
{
	protected $table='sprint';

	public function log_project() {
    	return $this->hasMany('Modules\Logbook\Entities\Logproject');
    }

    public function task() {
    	return $this->hasMany('Modules\Logbook\Entities\Task');
    }

    
}
