<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('route');
});

Route::get('foo', function () {
    return 'getで来た';
});

Route::post('foo/bar', function () {
    return 'postで来た';
});

Route::put('foo/bar', function () {
  return 'putで来た';
});

Route::delete('foo/bar', function () {
  return 'deleteで来た';
});
