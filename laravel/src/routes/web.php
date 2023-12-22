<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;




Route::get('/',  'App\Http\Controllers\topController@index');
Route::get('/top',  'App\Http\Controllers\topController@index');
Route::get('/hello',  'App\Http\Controllers\HelloController@index');
Route::get('/send',  'App\Http\Controllers\TestController@send');
Route::post('/response',  'App\Http\Controllers\TestController@response');

//Route::get('/test',  'App\Http\Controllers\FirebaseController@loadDoc'); firebase TEST
