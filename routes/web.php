<?php

use App\Http\Controllers\UjianController;
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

// Route::get('/ujian', 'UjianController@index');
Route::resource('/ujian', 'UjianController');
// Route::get('/ujian/{ujian}/edit', 'UjianController@edit');
// Route::patch('/ujian/{ujian}', 'UjianController@update');

// Route::get('/ujian/create' , 'UjianController@create');
// Route::post('/ujian', 'UjianController@store');