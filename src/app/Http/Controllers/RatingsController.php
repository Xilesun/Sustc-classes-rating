<?php

namespace App\Http\Controllers;

use App\DBModels\Ratings;

class RatingsController extends Controller {
  public function showratingsByClass($class_id) {
    $ratings = Ratings::where('class_id', $class_id)->get();
    return $ratings;
  }
}
