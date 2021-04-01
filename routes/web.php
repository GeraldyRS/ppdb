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

Route::get('/', 'App\Http\Controllers\PpdbController@index');
Route::get('/formcreate', 'App\Http\Controllers\PpdbController@formcreate');
Route::post('/create', 'App\Http\Controllers\PpdbController@create');
Route::get('/formedit/{id}', 'App\Http\Controllers\PpdbController@formedit');
Route::post('/edit', 'App\Http\Controllers\PpdbController@edit');
Route::get('/delete/{id}', 'App\Http\Controllers\PpdbController@delete');

