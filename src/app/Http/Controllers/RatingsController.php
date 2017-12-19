<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DBModels\Ratings;

class RatingsController extends Controller {
  public function showRatingsByClass($class_id) {
    $ratings = Ratings::where('class_id', $class_id)->get();
    return $ratings;
  }

  public function addRating(Request $request, $class_id) {
    $grade = $request->grade;
    $star = $request->star;
    $comment = $request->comment;
    $date = date('Y-m-d H:i:s');

    Ratings::insert(['class_id' => $class_id, 'grade' => $grade, 'star' => $star, 'comment' => $comment, 'date' => $date]);
  }

  public function updateRating(Request $request, $class_id, $rating_id) {
    $grade = $request->grade;
    $star = $request->star;
    $comment = $request->comment;

    Ratings::whereColumn([['class_id', '=', $class_id], ['id', '=', $rating_id]])->update(['grade' => $grade, 'star' => $star, 'comment' => $comment]);
  }

  public function likeRating($class_id, $rating_id) {
    Ratings::whereColumn([['class_id', '=', $class_id], ['id', '=', $rating_id]])->increment('likess');
  }
}
