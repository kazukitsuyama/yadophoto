<?php

Auth::routes();
Route::get('/', 'PostsController@index');
Route::get('/users/{user_id}', 'UsersController@show');