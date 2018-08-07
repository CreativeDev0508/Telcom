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

Route::get('/register-index', 'Auth\AuthController@indexRegister')->name('register_index');
Route::get('/logout', 'Auth\AuthController@logout');

Route::group(['middleware'=>['auth']], function()
{

	Route::get('/home', 'HomeController@index')->name('index');


	Route::group(['prefix' => 'AM'], function()
	{
		Route::get('/', 'AM\DashboardController@index')->name('am_index');
		Route::get('/dashboard', 'AM\DashboardController@index')->name('am_index');
		Route::get('/dashboard/print/{id}', 'Word\TemplateController@createWordDocxP1')->name('print');
		Route::get('/dashboard/delete/{id_proyek}','AM\DashboardController@deleteProyek')->name('proyek_delete');
		Route::get('/dashboard/status/{id_proyek}','AM\DashboardController@updateStatus')->name('status_update');
		Route::post('/dashboard/bukti/insert/{id_proyek}','AM\DashboardController@insertBukti')->name('bukti_insert');
		Route::post('/dashboard/bukti/update/{id_proyek}','AM\DashboardController@updateBukti')->name('bukti_update');

		Route::get('/form-pelanggan','AM\FormPelangganController@indexPelanggan')->name('pelanggan');
		Route::post('/form-pelanggan/insert','AM\FormPelangganController@insertPelanggan')->name('pelanggan_insert');
		Route::get('/form-pelanggan/{id_pelanggan}/{id_proyek}/{id_aspek}','AM\FormPelangganController@singlePelanggan')->name('pelanggan_single');
		Route::get('/form-pelanggan/update/{id_pelanggan}/{id_proyek}/{id_aspek}','AM\FormPelangganController@updatePelanggan')->name('pelanggan_update');

		Route::get('/form-proyek/{id_pelanggan}/{id_proyek}/{id_aspek}','AM\FormProyekController@indexProyek')->name('proyek_single');
		Route::post('/form-proyek/insert/{id_pelanggan}/{id_proyek}/{id_aspek}','AM\FormProyekController@insertProyek')->name('proyek_insert');

		Route::get('/form-aspek/{id_pelanggan}/{id_proyek}/{id_aspek}','AM\FormAspekController@indexAspek')->name('aspek_single');
		Route::get('/form-aspek/insert/{id_pelanggan}/{id_proyek}/{id_aspek}','AM\FormAspekController@insertAspek')->name('aspek_insert');

		Route::get('/unit-kerja','AM\UnitKerjaController@indexUnitKerja')->name('unit');
		Route::post('/unit-kerja/insert','AM\UnitKerjaController@insertUnitKerja')->name('unit_insert');
		Route::get('/unit-kerja/update/{id}', 'AM\UnitKerjaController@updateUnitKerja')->name('unit_update');
		Route::get('/unit-kerja/delete/{id}', 'AM\UnitKerjaController@deleteUnitKerja')->name('unit_delete');

		Route::get('/mitra','AM\MitraController@indexMitra')->name('mitra');
		Route::post('/mitra/insert','AM\MitraController@insertMitra')->name('mitra_insert');
		Route::get('/mitra/update/{id}','AM\MitraController@updateMitra')->name('mitra_update');
		Route::get('/mitra/delete/{id}','AM\MitraController@deleteMitra')->name('mitra_delete');
	});


	Route::group(['prefix' => 'SE'], function()
	{
		Route::get('/', 'SE\DashboardController@index')->name('se_index');
		Route::get('/dashboard', 'SE\DashboardController@index')->name('se_index');
	});


	Route::group(['prefix' => 'karyawan'], function()
	{
		Route::get('/', 'Karyawan\DashboardController@index')->name('karyawan_index');
		Route::get('/dashboard', 'Karyawan\DashboardController@index')->name('karyawan-index');
	});
	

	
});

Route::get('/yeboi', 'Telegram\ChatroomController@sendMessage');