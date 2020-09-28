<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PagamentoController@index') -> name('index');
Route::get('/show/{id}', 'PagamentoController@show') -> name('show');
Route::get('/delete/{id}', 'PagamentoController@destroy') -> name('destroy');
Route::get('/edit/{id}', 'PagamentoController@edit') -> name('edit');
Route::post('/update/{id}', 'PagamentoController@update') -> name('update');
