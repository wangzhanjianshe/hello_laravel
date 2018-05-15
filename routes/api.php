<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/user/{id}','UserController@show')->name('user.show');

Route::get('/test','UserController@test')->name('user.test');
Route::get('/user','UserController@store');//新增用户

Route::get('/post','PostController@store');//新增文章
Route::get('/post/index','PostController@index');//新增文章11
Route::get('/post/info/{id?}','PostController@info');