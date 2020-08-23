<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.adminlte');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/user', 'Admin\UserController@index');
Route::get('admin/user/create', 'Admin\UserController@create');
Route::post('admin/user', 'Admin\UserController@store');
Route::get('admin/user/{id}/edit', 'Admin\UserController@edit');
Route::post('admin/user/{id}', 'Admin\UserController@update');
Route::get('admin/user/{id}/delete', 'Admin\UserController@destroy');
