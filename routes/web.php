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
    return redirect()->route('index');
});

Auth::routes();

Route::get('/register-index', 'AuthController@indexRegister')->name('register_index');
Route::get('/logout', 'AuthController@logout');

Route::group(['middleware'=>['auth']], function()
{
	Route::get('/home', 'HomeController@index')->name('index');
	Route::get('/home/print/{id}', 'WordTemplateController@createWordDocxP1')->name('print');

	Route::get('/AM-form-pelanggan','AMController@indexPelanggan')->name('pelanggan');
	Route::post('/AM-form-pelanggan/insert','AMController@insertPelanggan')->name('pelanggan_insert');
	// Route::get('/AM-form-pelanggan/update/{id}','AMController@updatePelanggan')->name('pelanggan_update');


	Route::get('/AM-form-proyek/insert/{id}/{id_pelanggan}','AMController@insertProyek')->name('proyek_insert');
	Route::get('/AM-form-proyek/{id}/{id_pelanggan}','AMController@indexProyek')->name('proyek');
	// Route::get('/AM-form-proyek/update/{id}','AMController@updateProyek')->name('proyek_update');

	Route::get('/AM-form-aspek','AMController@indexAspek')->name('aspek');
	Route::post('/AM-form-aspek/insert','AMController@insertAspek')->name('aspek_insert');

	Route::get('/AM-unit-kerja','AMController@indexUnitKerja')->name('unit');
	Route::post('/AM-unit-kerja/insert','AMController@insertUnitKerja')->name('unit_insert');
	Route::get('/AM-unit-kerja/update/{id}', 'AMController@updateUnitKerja')->name('unit_update');
	Route::get('/AM-unit-kerja/delete/{id}', 'AMController@deleteUnitKerja')->name('unit_delete');

	Route::get('/AM-mitra','AMController@indexMitra')->name('mitra');
	Route::post('/AM-mitra/insert','AMController@insertMitra')->name('mitra_insert');
	Route::get('/AM-mitra/update/{id}','AMController@updateMitra')->name('mitra_update');
	Route::get('/AM-mitra/delete/{id}','AMController@deleteMitra')->name('mitra_delete');

});
