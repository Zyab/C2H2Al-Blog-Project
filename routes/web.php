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

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $posts = \App\Post::paginate(6);
    return view('home-page.index', compact('posts'));
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=> 'post'], function (){
   Route::get('create', 'PostController@create')->name('post.create');
   Route::post('create', 'PostController@store')->name('post.store');
   Route::get('list', 'PostController@getAllPost')->name('post.list');
   Route::get('show/{id}', 'PostController@show')->name('post.show');
   Route::get('edit/{id}', 'PostController@edit')->name('post.edit');
   Route::post('edit/{id}', 'PostController@update')->name('post.update');
   Route::get('search{id}', 'PostController@search')->name('post.search');
   Route::get('delete/{id}', 'PostController@delete')->name('post.delete');

});

Route::post('comment/store/{id}', 'CommentController@store')->name('comment.store');
Route::post('comment/store/{id}/reply', 'ReplyController@replyComment')->name('reply.replyComment');

Route::group(['prefix'=> 'user'], function (){
    Route::get('edit/{id}', 'UserController@edit')->name('user.edit');
    Route::post('edit/{id}', 'UserController@update')->name('user.update');
});


Route::get('/change-password', 'Auth\ChangePasswordController@index')->name('password.change');
Route::post('/change-password', 'Auth\ChangePasswordController@changePassword')->name('password.update');

Route::get('pdf/{id}-pdf','pdfController@index')->name('export-pdf');

Route::group(['prefix'=> 'album'], function (){
Route::get('create','AlbumController@create')->name('album.create');
Route::post('create','AlbumController@store')->name('album.store');
Route::get('list','AlbumController@list')->name('album.list');
Route::get('showDetail/{id}','AlbumController@showDetail')->name('album.detail');
Route::get('delete/{id}','AlbumController@delete')->name('album.delete');
});
