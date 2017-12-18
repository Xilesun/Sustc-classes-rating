<?php

namespace App\Http\Controllers;

use App\DBModels\Classes;

class ClassesController extends Controller {
  public function show() {
    $classes = Classes::all();
    return $classes;
  }
}
