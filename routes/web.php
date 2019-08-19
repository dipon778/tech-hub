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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/posts','PostController@index')->name('posts');
Route::get('/posts/createPost','PostController@create')->name('posts.createPosts');
Route::post('/posts/createPost','PostController@store');
Route::get('/posts/showPost{sid}','PostController@show')->name('posts.showPost');
Route::post('/search','PostController@search');

Route::get('/jobs','JobController@index')->name('jobs');
Route::get('/jobs/{sid}','JobController@showJob');

Route::get('/profile','Profilecontroller@index')->name('profile');
Route::get('/profile/edit','Profilecontroller@edit');
Route::post('/profile','Profilecontroller@store');
Route::get('/profile/posts','Profilecontroller@posts');
Route::get('/profile/posts/edit{sid}','Profilecontroller@postEdit')->name('profile.posts.edit');
Route::post('/profile/posts/edit{sid}','Profilecontroller@postUpdate');
Route::get('/profile/posts/delete{sid}','Profilecontroller@postShow')->name('profile.posts.delete');
Route::post('/profile/posts/delete{sid}','Profilecontroller@postDelete');