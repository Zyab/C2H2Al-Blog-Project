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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home-page.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=> 'post'], function (){
    Route::get('create', 'PostController@create')->name('post.create');
    Route::post('create', 'PostController@store')->name('post.store');
    Route::get('list', 'PostController@getAllPost')->name('post.list');
    Route::get('show/{id}', 'PostController@show')->name('posts.show');
    Route::get('edit/{id}', 'PostController@edit')->name('post.edit');
    Route::post('edit/{id}', 'PostController@update')->name('post.update');
    Route::get('delete/{id}', 'PostController@delete')->name('post.delete');
});
Route::group(['prefix'=> 'user'], function (){
    Route::get('edit/{id}', 'UserController@edit')->name('user.edit');
    Route::post('edit/{id}', 'UserController@update')->name('user.update');
});
Route::get('change-password', 'ChangePasswordController@index')->name('change.password');
