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


Route::group(['prefix'=>'kategori'], function(){
    route::get('/','Kategori\KategoriController@index')->name('kategori');
    route::get('/edit/kategori/{id}','Kategori\KategoriController@edit')->name('kategori.edit');
    route::post('/store', 'Kategori\KategoriController@store')->name('kategori.store');
    route::patch('/update/{id}', 'Kategori\KategoriController@update')->name('kategori.update');
    route::get('/show', 'Kategori\KategoriController@show')->name('kategori.show');
    route::delete('/delete/{id}', 'Kategori\KategoriController@destroy')->name('kategori.delete');
});

Route::group(['prefix' => 'brand'], function () {
    route::get('/', 'Brand\BrandController@index')->name('brand');
    route::get('/edit/brand/{id}', 'Brand\BrandController@edit')->name('brand.edit');
    route::post('/store', 'Brand\BrandController@store')->name('brand.store');
    route::patch('/update{id}', 'Brand\BrandController@update')->name('brand.update');
    route::get('/show', 'Brand\BrandController@show')->name('brand.show');
    route::delete('/delete/{id}', 'Brand\BrandController@destroy')->name('brand.delete');
});

Route::group(['prefix' => 'satuan'], function () {
    route::get('/', 'Uom\UomController@index')->name('satuan');
    route::get('/edit', 'Uom\UomController@edit')->name('satuan.edit');
});

Route::group(['prefix' => 'master-barang'], function () {
    route::get('/', 'Masterbarang\MasterbarangController@index')->name('master-barang');
    route::get('/add', 'Masterbarang\MasterbarangController@create')->name('master-barang.add');
    route::get('/edit', 'Masterbarang\MasterbarangController@edit')->name('master-barang.edit');
    route::get('/request', 'Masterbarang\RequestbarangController@edit')->name('master-barang.request');
    route::get('/show', 'Masterbarang\MasterbarangController@show')->name('master-barang.show');
});

Route::group(['prefix' => 'transaksi'], function () {
    route::get('/in', 'Transaksi\InController@index')->name('transaksi.in');
    route::get('/out', 'Transaksi\OutController@index')->name('transaksi.out');
});
