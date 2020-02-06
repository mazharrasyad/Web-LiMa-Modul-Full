<?php

namespace Modules\Progress\Entities;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';

    protected $casts = [
        'status' => 'boolean',
    ];

    protected $fillable = ['sprint_id', 'nama_task', 'kesulitan_id', 'status'];

    public function sprint()
    {
    	return $this->belongsTo('Modules\Progress\Entities\Sprint');
    }

    public function kesulitan()
    {
    	return $this->belongsTo('Modules\Progress\Entities\Kesulitan');
    }
}
