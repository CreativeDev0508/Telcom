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
    return view('AM.form-pelanggan');
});
Route::post('/AM/form-pelanggan/insert','AMController@insertPelanggan');