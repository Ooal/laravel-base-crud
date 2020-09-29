<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PostController@index') -> name('index');
Route::get('/show/{id}', 'PostController@show') -> name('show');
Route::get('/delete/{id}', 'PostController@destroy') -> name('destroy');
Route::get('/edit/{id}', 'PostController@edit') -> name('edit');
Route::post('/update/{id}', 'PostController@update') -> name('update');
Route::get('/create', 'PostController@create') -> name('create');
Route::post('/create', 'PostController@store') -> name('store');
