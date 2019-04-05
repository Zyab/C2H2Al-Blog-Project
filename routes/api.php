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

Route::post('users/{id}/update', 'API\UserController@changeInfo');
Route::get('users/{id}/info', 'API\UserController@showInfo');
Route::get('/users', 'API\UserController@getAll')->name('user.all');
Route::delete('/users/{userId}/delete', 'API\UserController@destroy')->name('user.destroy');
Route::post('/user', 'UserController@store')->name('user.store');
Route::put('/user/{userId}/update', 'UserController@update')->name('user.update');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
