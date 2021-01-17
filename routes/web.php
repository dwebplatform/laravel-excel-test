<?php

use Illuminate\Support\Facades\Route;
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
// import
Route::get('/services/export','App\Http\Controllers\ServiceController@export');
Route::get('/services/create-dummy-data','App\Http\Controllers\ServiceController@createDummyData');
Route::get('services/import', 'App\Http\Controllers\ServiceController@import');
Route::get('/services', 'App\Http\Controllers\ServiceController@allservices');
Route::get('/', function () {
    return view('welcome');
});
