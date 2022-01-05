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

Route::get('/','DataController@index'); 
Route::get('data/create','DataController@create');
Route::post('/','DataController@store');
Route::get('data/{id}','DataController@show');
Route::get('data/{id}/edit','DataController@edit');

Route::put('data/{id}','DataController@update');
Route::delete('data/{id}','DataController@destroy');
