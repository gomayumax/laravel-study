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
    return view('welcome');
});

Route::get('/hoge/huga', function() {
    return view('hoge.huga');
});

Route::get('/hoge/atai', function() {
    return view('hoge.atai', ['hensuumei' => 'hyouzi']);
});
