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

Route::get('/home','HomeController@index');
// Route::get('/admin/posts','PostController@index');
Route::group(['prefix' => 'admin'],function(){
    Route::resource('posts' , 'PostController');
    Route::resource('tags' , 'TagController');
    Route::resource('categories' , 'CategoryController');
    Route::resource('comments' , 'CommentController');
});



