<?php

namespace Modules\Individu\Entities;

use Illuminate\Database\Eloquent\Model;

class Sprint extends Model
{
  public $table = "sprint";
  public $primaryKey = "id";
  public $incrementing = true;
  public $fillable = [
    'nama',
    'updated_at',
    'created_at'];
}
