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

Route::get('/login', function () {
    return view('layouts/login');
});

Route::get('/', function () {
    return view('layouts/app'); 
});

Route::get('/login','AuthController@login');

Route::post('/postlogin','AuthController@postlogin');
Route::post('/edit', 'EditController@edit');
Route::get('/delete/{id}', 'EditController@delete');
Route::get('/sewa', 'PenyewaanController@show');
Route::post('/store', 'PenyewaanController@store');
Route::post('/sewa/edit', 'PenyewaanController@edit');
Route::get('/sewa/delete/{id}', 'PenyewaanController@delete');



Route::resource('ruangan', 'RuanganController');


