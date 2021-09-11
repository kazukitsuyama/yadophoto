<?php

Auth::routes();
Route::get('/', 'PostsController@index');
Route::get('/users/edit', 'UsersController@edit');
Route::post('/users/update', 'UsersController@update');
Route::get('/users/{user_id}', 'UsersController@show');
