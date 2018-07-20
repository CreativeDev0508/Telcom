<?php

/**
 * PHP version 7.1.11
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 * 
 * @category Description
 * @package  Level1
 * @author   KP GES Telkom <username@example.com>
 * @license  example.com none
 * @link     http://example.com/my/bar Documentation of Foo.
 **/

// Route::get('/', function ()
// {
// return view('AM.dashboard');
// });

// Route::get('/login', 'AuthController@indexLogin');
// Route::post('/login/insert', 'AuthController@login');
// Route::get('/register', 'AuthController@indexRegister');
// Route::post('/register/insert', 'AuthController@register');

// Route::get('/AM-dashboard', function ()
// {
    //     return view('AM.dashboard');
    // });
Auth::routes();
Route::get('/logout', 'AuthController@logout');
    
Route::get(
    '/', function () {
        return redirect('/home');
    }
);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/print/{id}', 'WordTemplateController@createWordDocxP1');

Route::get('/AM-form-pelanggan', 'AMController@indexPelanggan');
Route::post('/AM-form-pelanggan/insert', 'AMController@insertPelanggan');
Route::get('/AM-form-pelanggan/update/{id}', 'AMController@updatePelanggan');

Route::get('/AM-form-proyek', 'AMController@indexProyek');
Route::post('/AM-form-proyek/insert', 'AMController@insertProyek');
Route::get('/AM-form-proyek/update/{id}', 'AMController@updateProyek');

Route::get('/AM-form-aspek', 'AMController@indexAspek');
Route::post('/AM-form-aspek/insert', 'AMController@insertAspek');

Route::get('/AM-unit-kerja', 'AMController@indexUnitKerja');
Route::post('/AM-unit-kerja/insert', 'AMController@insertUnitKerja');
Route::get('/AM-unit-kerja/update/{id}', 'AMController@updateUnitKerja');
Route::get('/AM-unit-kerja/delete/{id}', 'AMController@deleteUnitKerja');

Route::get('/AM-mitra', 'AMController@indexMitra');
Route::post('/AM-mitra/insert', 'AMController@insertMitra');
Route::get('/AM-mitra/update/{id}', 'AMController@updateMitra');
Route::get('/AM-mitra/delete/{id}', 'AMController@deleteMitra');
