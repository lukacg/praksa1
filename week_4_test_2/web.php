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


Route::get('/posts', 'PostController@index');

Route::get('/posts/create','PostController@create')->name("createpost");
Route::post('/posts/create','PostController@create')->name("createpost");

Route::get('/editpost/{id}','PostController@editpost');

Route::post('/update/{id}','PostController@update')->name('updatepost');

route::get('/delete/{id}','PostController@delete');

Route::get('/like/{id}','PostController@like');
