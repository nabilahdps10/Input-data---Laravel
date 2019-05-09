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


Route::post('/home/create', 'postsController@store');
Route::get('/delete/{id}', 'postsController@delete' );
Route::resource('home', 'postsController');
Route::get('/edit/{id}','postsController@edit');
Route::post('/update','postsController@update');
