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

Route::get('/AM-form-aspek','AMController@indexAspek');
Route::post('/AM-form-aspek/insert','AMController@insertAspek');

Route::get('/AM-unit-kerja','AMController@indexUnitKerja');
Route::post('/AM-unit-kerja/insert','AMController@insertUnitKerja');
Route::get('/AM-unit-kerja/update/{id}', 'AMController@updateUnitKerja');

Route::get('/createWord', ['as'=>'createWord','uses'=>'WordTemplateController@createWordDocxP1']);
Route::get('/AM-mitra','AMController@indexMitra');
Route::post('/AM-mitra/insert','AMController@insertMitra');
Route::get('/AM-mitra/update/{id}','AMController@updateMitra');
Route::get('/AM-mitra/delete/{id}','AMController@deleteMitra');

