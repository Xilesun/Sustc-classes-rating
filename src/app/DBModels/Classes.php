<?php

namespace App\DBModels;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model {
  //The table storing info of classes
  protected $table = 'classes';
  //Indicates if the model should be timestamped.
  public $timestamps = false;
}