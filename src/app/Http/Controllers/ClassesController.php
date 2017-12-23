<?php

namespace App\Http\Controllers;

use App\DBModels\Classes;
use App\DBModels\Ratings;
use Illuminate\Http\Request;

class ClassesController extends Controller {
  public function showClasses() {
    $classes = Classes::all();
    return $classes;
  }

  public function addClass(Request $request) {
    $teacher = $request->teacher;
    $name = $request->name;
    $code = $request->code;

    Classes::insert(['teacher' => $teacher, 'name' => $name, 'code' => $code]);
  }

  public function updateClass(Request $request, $class_id) {
    $teacher = $request->teacher;
    $name = $request->name;
    $code = $request->code;

    Classes::where('id', '=', $class_id)->update(['teacher' => $teacher, 'name' => $name, 'code' => $code]);
  }

  public function deleteClass(Request $request, $class_id) {
    Classes::where('id', '=', $class_id)->delete();
    Ratings::where('class_id', '=', $class_id)->delete();
  }
}
