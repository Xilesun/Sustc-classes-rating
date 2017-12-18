<?php

namespace App\DBModels;

use Illuminate\Database\Eloquent\Model;

class Ratings extends Model {
  //The table storing ratings of classes
  protected $table = 'ratings';
  //The name of create date column
  const CREATED_AT = 'date';

}