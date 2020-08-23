<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('user', 'API\UserController@index');
Route::post('user', 'API\UserController@store');
Route::put('user/{id}', 'API\UserController@update');
Route::delete('user/{id}', 'API\UserController@destroy');