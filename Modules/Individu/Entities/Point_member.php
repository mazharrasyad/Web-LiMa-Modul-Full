<?php

namespace Modules\Individu\Entities;

use Illuminate\Database\Eloquent\Model;

class Point_member extends Model
{
  public $table = "point_member";
  public $primaryKey = "id";
  public $incrementing = true;
  public $fillable = [
    'point',
    'keterangan',
    'dosen_scrum_master_id' ,
    'mahasiswa_id' ,
    'sprint_id',
    'updated_at' ,
    'created_at'
  ];
}
