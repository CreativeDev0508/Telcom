<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/AM-dashboard', function ()
{
    return view('AM.dashboard');
});

Route::get('/AM-form-pelanggan','AMController@indexPelanggan');
Route::post('/AM-form-pelanggan/insert','AMController@insertPelanggan');

Route::get('/AM-form-proyek','AMController@indexProyek');
Route::post('/AM-form-proyek/insert','AMController@insertProyek');

