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

Route::group(['middleware'=>'web'],function(){

Route::group(['prefix'=>'admin','middleware'=>['auth']],function(){
	Route::resource('jenis','JenisController');
	Route::resource('supplier','SupplierController');
	Route::resource('barang','BarangController');
	Route::resource('pembelian','PembelianController');
	Route::resource('transaksi','TransaksiController');
	
	Route::get('/laporan','LaporanController@index');
	Route::post('/laporan/detail','LaporanController@index2');
});
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');