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

use App\User;

Route::get('/', function ()
{
	if(Auth::guest())
	{
		return view('auth.login');
	}
    return redirect('/home');
});

Auth::routes();

Route::get('/register-index', 'AuthController@indexRegister');
Route::get('/logout', 'AuthController@logout');

Route::group(['middleware'=>['auth']], function()
{
	Route::get('/home', 'HomeController@index');
	Route::get('/home/print/{id}', 'WordTemplateController@createWordDocxP1');

	Route::get('/AM-form-pelanggan','AMController@indexPelanggan');
	Route::post('/AM-form-pelanggan/insert','AMController@insertPelanggan');
	Route::get('/AM-form-pelanggan/update/{id}','AMController@updatePelanggan');

	Route::get('/AM-form-proyek/{id}','AMController@indexProyek');
	Route::post('/AM-form-proyek/insert','AMController@insertProyek');
	Route::get('/AM-form-proyek/update/{id}','AMController@updateProyek');

	Route::get('/AM-form-aspek','AMController@indexAspek');
	Route::post('/AM-form-aspek/insert','AMController@insertAspek');

	Route::get('/AM-unit-kerja','AMController@indexUnitKerja');
	Route::post('/AM-unit-kerja/insert','AMController@insertUnitKerja');
	Route::get('/AM-unit-kerja/update/{id}', 'AMController@updateUnitKerja');
	Route::get('/AM-unit-kerja/delete/{id}', 'AMController@deleteUnitKerja');

	Route::get('/AM-mitra','AMController@indexMitra');
	Route::post('/AM-mitra/insert','AMController@insertMitra');
	Route::get('/AM-mitra/update/{id}','AMController@updateMitra');
	Route::get('/AM-mitra/delete/{id}','AMController@deleteMitra');

	
});
