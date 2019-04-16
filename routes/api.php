<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::group(['prefix' => 'users'], function () {

Route::get('/list', 'UserController@getAll')->name('user.list');
Route::get('/show/{id}', 'UserController@show')->name('user.show');
Route::delete('/{userId}/delete', 'UserController@destroy')->name('user.destroy');
Route::post('/store', 'UserController@store')->name('user.store');
Route::put('/{userId}/update', 'UserController@update')->name('user.update');
});
//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group(['prefix' => 'posts'], function () {
    Route::get('/list', 'PostApiController@getAll')->name('posts.all');
    Route::get('/show/{postsId}', 'PostApiController@show')->name('posts.show');
    Route::post('/store', 'PostApiController@store')->name('posts.store');
    Route::put('/update/{postsId}', 'PostApiController@update')->name('posts.update');
    Route::delete('/destroy/{postsId}', 'PostApiController@destroy')->name('posts.destroy');
});
