<?php

use Illuminate\Support\Facades\Route;
Route::group(['middleware' => 'checkSession'], function () {
    Route::get('/', 'HomeController@index');
    Route::get('/user', 'UserController@index');
    Route::get('/list', 'UserController@list');
    Route::get('/add', 'UserController@tambah');
    Route::get('/edit/{id}', 'UserController@edit');

    Route::post('/simpan', 'UserController@simpan');
    Route::post('/update', 'UserController@update');
});

Route::get('/login', 'HomeController@login');
Route::post('/masuk', 'HomeController@masuk');
