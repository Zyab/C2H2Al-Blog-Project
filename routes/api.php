<?php

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

Route::group(['prefix' => 'posts'], function () {
    Route::get('/list', 'PostApiController@getAll')->name('posts.all');
    Route::get('/show/{postsId}', 'PostApiController@show')->name('posts.show');
    Route::post('/store', 'PostApiController@store')->name('posts.store');
    Route::put('/update/{postsId}', 'PostApiController@update')->name('posts.update');
    Route::delete('/destroy/{postsId}', 'PostApiController@destroy')->name('posts.destroy');
});

Route::post('login', 'AuthController@login');
Route::post('logout', 'AuthController@logout');
Route::post('refresh', 'AuthController@refresh');
Route::middleware('jwt.auth')->get('me', 'AuthController@me');
Route::post('register', 'AuthController@register');

Route::group(['middleware' => 'jwt.auth'], function () {
	Route::post('update', 'AuthController@update');
	Route::post('create-blog', 'AuthController@createBlog');
	Route::post('upload-image', 'AuthController@uploadImage');
	Route::get('show-blogs', 'AuthController@showBlogs');
	Route::delete('delete-blog/{id}', 'AuthController@deleteBlog');
	Route::get('blog-detail/{id}', 'AuthController@showBlogDetail');
	Route::post('blog-update/{id}', 'AuthController@updateBlog');
	Route::post('search', 'AuthController@search');
	Route::get('get-all-tags', 'AuthController@getAllTags');
	Route::post('get-user-by-tag', 'AuthController@searchByTag');
	Route::post('create-comments/{id}', 'AuthController@createComment');
	Route::get('get-all-comments/{id}', 'AuthController@getComment');
	Route::post('reply/{cmtId}', 'AuthController@createReply');
	Route::post('get-all-replies/{cmtId}', 'AuthController@getAllReplies');
	Route::post('create-album', 'AuthController@createAlbum');
	Route::get('get-all-album', 'AuthController@getAllAlbum');
	Route::get('show-album/{id}', 'AuthController@showAlbumDetail');
	Route::delete('delete-album/{id}', 'AuthController@deleteAlbum');
	Route::post('change-password', 'AuthController@changePassword');
});

