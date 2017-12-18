<?php

namespace App\Http\Controllers;

use App\DBModels\Classes;

class ClassesController extends Controller {
  public function showClasses() {
    $classes = Classes::all();
    return $classes;
  }
}
