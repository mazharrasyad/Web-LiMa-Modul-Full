<?php

namespace Modules\Individu\Entities;

use Illuminate\Database\Eloquent\Model;

class Tim extends Model
{
  public $table = "tim";
  public $primaryKey = "id";
  public $incrementing = true;
  public $fillable = [
    'nama',
    'semester',
    'prodi_id',
    'updated_at',
    'created_at'];
}
