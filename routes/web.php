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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    // Route::get('/', function () {
    //     return view('welcome');
    // });
    Route::get('/', 'Auth\LoginController@index');

    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('divisi', 'DivisiController');
    Route::resource('jabatan', 'JabatanController');
    Route::resource('pengguna', 'PenggunaController');

    Route::get('/sampah-pengguna', 'KaryawanController@trash');
    Route::get('/user-restore/{id}', 'KaryawanController@restore');
    Route::get('/user-force-delete/{id}', 'KaryawanController@force_delete');

    Route::resource('karyawan', 'KaryawanController');
    Route::resource('absensi', 'AbsensiController');
    // Route::resource('pinjaman', 'PinjamanController');
    Route::resource('lembur', 'LemburController');
    Route::resource('penggajian', 'PenggajianController');
    Route::resource('slipgaji', 'SlipGajiController');
    Route::resource('laporan', 'LaporanController');
    Route::resource('jurnalUmum', 'JurnalUmumController');
    // Route::resource('bukuBesar', 'BukuBesarController');

});
Route::group(['prefix' => 'admin'], function () {

    Route::resource('/users', 'Admin\UserController');
    Route::resource('/roles', 'Admin\RoleController');
    Route::resource('/permissions', 'Admin\PermissionController');

});
