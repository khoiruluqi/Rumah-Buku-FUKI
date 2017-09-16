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

Route::get('/', 'RumbukController@library');
Route::post('/', 'RumbukController@store');
Route::get('/peminjaman', 'LogController@show');
Route::get('/insert', 'RumbukController@create');
Route::post('/pinjam', 'RumbukController@pinjam');
Route::get('/{id}', 'RumbukController@show');
Route::get('/{id}/edit', 'RumbukController@edit');
Route::put('/{id}', 'RumbukController@update');
Route::delete('/{id}', 'RumbukController@destroy');
Route::post('/{id}', 'LogController@store');