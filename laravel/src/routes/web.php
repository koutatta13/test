<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;




Route::view('/', 'top');
Route::view('/top', 'top');
Route::get('/hello',  'App\Http\Controllers\HelloController@index');
Route::get('/send',  'App\Http\Controllers\TestController@send');
Route::post('/response',  'App\Http\Controllers\TestController@response');

Route::get('/test',  'App\Http\Controllers\FirebaseController@loadDoc');
Route::get('/test2',  'App\Http\Controllers\topController@index');