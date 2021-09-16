<?php


Route::get('/', 'PostsController@index');
Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'PostsController@index');
Route::get('/home', 'PostsController@index');
Route::get('/users/edit', 'UsersController@edit');
Route::post('/users/update', 'UsersController@update');
Route::get('/users/{user_id}', 'UsersController@show');
Route::get('/posts/new', 'PostsController@new')->name('new');
Route::post('/posts','PostsController@store');
