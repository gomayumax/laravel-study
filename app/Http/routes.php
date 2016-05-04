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

// HTTPメソッド確認
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


// 複数のHTTPメソッド確認
Route::match(['get', 'post'], '/match', function () {
    return 'getかputで来た';
});
Route::match(['delete', 'put'], '/match', function () {
    return 'put/deleteで来た';
});


// ルートパラメーター
// 1つだけパラメーター取得(必須)
Route::get('name/{name}', function ($name) {
    return 'あなた ' . $name . 'っていうのね！！！';
});
// 2つパラメーター取得(必須)
Route::get('name/{name1}/{name2}', function ($name1, $name2) {
    return $name1 . '!!!あなた ' . $name2 . 'っていうのね！！！';
});
/*
// パラメーター取得(任意)
Route::get('name/{name1?}', function ($name1='めい') {
    return 'いるなら返事しな！' . $name1 . '!!!';
});
 */
/*
// パラメーターのバリデーション
Route::get('name/{name}', function ($name) {
    return '妹の' . $name . 'です';
})
->where('name', '[a-z]+');
 */

// routeに名前をつけよう
Route::get('shout', function () {
    return 'こら！！！かんた！！！';
})
->name('shout');


// ルートグループ
Route::group(['middleware' => 'auth'], function () {
  Route::get('/kusakabeke', function ()    {
    // authミドルウェアが使用される
  });

  Route::get('kusakabeke/satsuki', function () {
    // authミドルウェアが使用される
  });
});


// サブドメインルーティング
Route::group(['domain' => '{account}.kusakabe.com'], function () {
    Route::get('user/{id}', function ($account, $id) {
    });
});


// プレフィックスルーティング
Route::group(['prefix' => 'charactor/{name}'], function () {
  Route::get('detail', function ($name)    {
    // "charactor/{name}/detail" URLに一致
    return $name . 'の詳細';
  });
});
