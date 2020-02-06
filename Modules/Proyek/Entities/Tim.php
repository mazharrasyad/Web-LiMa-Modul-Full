<?php

namespace Modules\Proyek\Entities;

use Illuminate\Database\Eloquent\Model;

class Tim extends Model
{
    public $table = 'tim';

    protected $guarded = [];

    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }

    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class, 'tim_id', 'id');        
    }

    public function membertims()
    {
        return $this->hasMany(Membertim::class, 'tim_id', 'id');        
    }
}