<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
});

//「PHP/Laravel 09 Routingについて理解する」課題3の回答　*
Route::get('XXX', 'Admin\AAAController@bbb');

//「PHP/Laravel 09 Routingについて理解する」課題4の回答
Route::group(['prefix' => 'admin'], function() {
    Route::get('profile/create', 'Admin\ProfileController@add');
    Route::get('profile/edit', 'Admin\ProfileController@edit');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//ログインしていない場合のリダイレクト処理に、middlewareを利用します。(auth 認証や許可)
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
    Route::post('news/create', 'Admin\NewsController@create');
    Route::get('profile/create', 'Admin\ProfileController@add');
    Route::post('profile/create', 'Admin\ProfileController@create');
    Route::get('profile/edit', 'Admin\ProfileController@edit');
    Route::post('profile/edit', 'Admin\ProfileController@update');
    Route::get('news', 'Admin\NewsController@index'); //一覧画面へのルーティングを設定
    Route::get('news/edit', 'Admin\NewsController@edit');
    Route::post('news/edit', 'Admin\NewsController@update');
    Route::get('news/delete', 'Admin\NewsController@delete');
    Route::get('profile/delete', 'Admin\ProfileController@delete');
});

    Route::get('/', 'NewsController@index');//一般ユーザー用のフロント一覧画面へのルーティング設定
    
    //カリキュラム19 課題
    Route::get('profile', 'ProfileController@index');




