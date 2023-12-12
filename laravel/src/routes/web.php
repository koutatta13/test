<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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


Route::view('/', 'top');
Route::view('/top', 'top');
//Route::get('/test',  'App/Http/Controllers/HelloController@index');
Route::get('/hello',  'App\Http\Controllers\HelloController@index');
Route::get('/send',  'App\Http\Controllers\TestController@send');
Route::post('/response',  'App\Http\Controllers\TestController@response');
//Route::get('/test',  'App/Http/TestController@index');