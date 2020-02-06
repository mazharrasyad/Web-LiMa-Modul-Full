<?php

namespace Modules\Proyek\Entities;

use Eloquent as Model;

class Semester extends Model
{
    public $table = 'semester';

    public function projects()
    {
        return $this->hasMany(Project::class, 'semester_id', 'id');        
    }
}