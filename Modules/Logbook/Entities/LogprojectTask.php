<?php

namespace Modules\Logbook\Entities;

use Illuminate\Database\Eloquent\Model;

class LogProjectTask extends Model
{
    protected $table = 'log_project_task';

    protected $fillable = ['task_id', 'log_project_id'];

    public function log_project()
    {
    	return $this->belongsTo(LogProject::class);
    }

    public function task()
    {
    	return $this->belongsTo(Task::class);
    }
}
