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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'tampilkan-data'], function(){
    Route::get('jenis','JenisController@index')->name('tampilkan-data.jenis');
    Route::get('transaksi','TransaksiController@index')->name('tampilkan-data.transaksi');
});

Route::group(['prefix'=>'ambil-form'], function(){
    route::get('transaksi','TransaksiController@create')->name('ambil-form.transaksi');
    route::get('jenis-transaksi','JenisController@create')->name('ambil-form.jenis-transaksi');
});

Route::group(['prefix' => 'simpan-data'], function(){
    route::post('types','JenisController@store')->name('simpan-data.types');
    route::post('transaksi','TransaksiController@store')->name('simpan-data.transaksi');
});

Route::group(['prefix' => 'ambil-form-edit'], function(){
    route::get('type/{type}','JenisController@edit')->name('ambil-form-edit.type');
    route::get('transaksi/{transaksi}','TransaksiController@edit')->name('ambil-form-edit.transaksi');
});

Route::group(['prefix' => 'update-data'], function(){
    route::patch('type/{type}','JenisController@update')->name('update-data.type');
    route::patch('transaksi/{transaksi}','TransaksiController@update')->name('update-data.transaksi');
});

Route::group(['prefix' => 'destroy'], function(){
    route::delete('type/{type}','JenisController@destroy')->name('destroy.type');
    route::delete('transaksi/{transaksi}','TransaksiController@destroy')->name('destroy.transaksi');
});
