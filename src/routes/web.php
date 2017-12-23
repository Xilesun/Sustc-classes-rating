<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/


$router->get('/', function () use ($router) {
    return view('welcome');
});

//API routes
$router->group(['prefix' => 'api'], function () use ($router) {
  //Get all classes infomation
  $router->get('/classes', 'ClassesController@showClasses');
  //Post a class
  $router->post('/classes', 'ClassesController@addClass');
  //Update a class
  $router->put('/classes/{class_id}', 'ClassesController@updateClass');
  //Delete a class
  $router->delete('/classes/{class_id}', 'ClassesController@deleteClass');

  $router->group(['prefix' => '/classes/{class_id}/ratings'], function () use ($router) {
    //Get ratings of class
    $router->get('/', 'RatingsController@showRatingsByClass');
    //Add new rating content
    $router->post('/', 'RatingsController@addRating');
    //Update a rating content
    $router->put('/{rating_id}', 'RatingsController@updateRating');
    //Delete a rating content
    $router->delete('/{rating_id}', 'RatingsController@deleteRating');
    //Like a rating
    $router->patch('/{rating_id}/like', 'RatingsController@likeRating');
  });
});