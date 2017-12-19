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
    return $router->app->version();
});

//Get all classes infomation
$router->get('classes', 'ClassesController@showClasses');

$router->group(['prefix' => 'classes/{class_id}/ratings'], function () use ($router) {
  //Get ratings of class
  $router->get('/', 'RatingsController@showRatingsByClass');
  //Add new rating content
  $router->post('/', 'RatingsController@addRating');
  //Update a rating content
  $router->put('/{rating_id}', 'RatingsController@updateRating');
  //Like a rating
  $router->patch('/{rating_id}/like', 'RatingsController@likeRating');
});
