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

// konsumen
Route::get('/', 'KonsumenController@index');
Route::get('/konsumenDetail/{id}', 'KonsumenController@show');
Route::get('/konsumenDelete/{id}', 'KonsumenController@destroy');
Route::get('/konsumenEdit/{id}', 'KonsumenController@get');
Route::post('/posteditkonsumen', 'KonsumenController@store');

// parkir
Route::get('/list', 'ParkirController@list');
Route::get('/parkir', 'ParkirController@index');
Route::post('/Viewtransaksi', 'ParkirController@ViewTransaksi');

//jquery
Route::post('/getbiaya', 'ParkirController@getbiaya');
