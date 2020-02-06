<?php

namespace Modules\Proyek\Entities;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $table = 'project';

    protected $guarded = [];

    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }

    public function scrummaster()
    {
        return $this->belongsTo('Modules\Absen\Entities\User'::class);
    }

    public function tim()
    {
        return $this->belongsTo(Tim::class);
    }

    public function mvps()
    {
        return $this->hasMany(Mvp::class, 'project_id', 'id');        
    }
}