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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home-page.index');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=> 'blog'], function (){
   Route::get('create', 'PostController@create')->name('blog.create');
   Route::get('list', 'PostController@getAllPost')->name('blog.list');
   Route::get('show/{id}', 'HomeController@show')->name('blog.show');
});
Route::group(['prefix'=> 'user'], function (){
    Route::get('edit/{id}', 'UserController@edit')->name('user.edit');
});


Route::get('/change-password', 'Auth\ChangePasswordController@index')->name('password.change');
Route::post('/change-password', 'Auth\ChangePasswordController@changePassword')->name('password.update');

