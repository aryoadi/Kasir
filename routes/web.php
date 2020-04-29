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
    return view('home');
});
Auth::routes();
Route::get('/kasir', 'KasirController@index')->name('kasir')->middleware('isKasir');
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('isAdmin');
Route::get('/owner', 'OwnerController@index')->name('owner')->middleware('isOwner');
Route::get('/waiter', 'WaiterController@index')->name('waiter')->middleware('isWaiter');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/barang', 'AdminController@index')->name('barang');
Route::get('/meja', 'Admin2Controller@index')->name('meja');
Route::get('/waiter', 'WaiterController@index')->name('waiter');
Route::get('waiter/order', 'OrderController@index')->name('order');
Route::get('kasir', 'KasirController@index')->name('kasir');

//barang
Route::get('/admin/barang/create','AdminController@create')->name('create');
Route::post('/barang','AdminController@store');
Route::get('/barang/{id_masakan}/edit','AdminController@edit')->name('editbarang');
Route::patch('/updatebrg/{id_masakan}','AdminController@update')->name('updatebrg');
Route::get('/destroy/{id_masakan}','AdminController@destroy')->name('destroy');

//meja
Route::get('/admin/meja/create','Admin2Controller@create')->name('create');
Route::post('/meja','Admin2Controller@store');
Route::get('/order/{id_order}/edit','Admin2Controller@edit')->name('editmeja');
Route::patch('/updatemeja/{id_order}','Admin2Controller@updatemeja')->name('updatemeja');
Route::get('/destroymeja/{id_order}','Admin2Controller@destroy')->name('destroymeja');

//waiter
Route::get('/waiter/create','WaiterController@create')->name('create');
Route::post('/waiter','WaiterController@store');
Route::get('/waiter/{id_masakan}/edit','WaiterController@edit')->name('edit');
Route::patch('/update/{id_masakan}','WaiterController@update')->name('update');
Route::get('/destroy.order/{id}','WaiterController@destroy')->name('destroy.order');

//order
Route::get('/waiter/corder','OrderController@create')->name('create');
Route::post('/waiter/order','OrderController@store');
// Route::get('/waiter/order/{id_masakan}/edit','OrderController@edit')->name('edit');
// Route::patch('/update/order{id_masakan}','OrderController@update')->name('update');
Route::get('/destroydetail/{id}','OrderController@destroy')->name('destroydetail');

//transaksi
Route::get('/kasir/create','KasirController@create')->name('create');
Route::post('/kasir','KasirController@store');
// Route::get('/waiter/{id_masakan}/edit','WaiterController@edit')->name('edit');
// Route::patch('/update/{id_masakan}','WaiterController@update')->name('update');
// Route::get('/destroy.order/{id}','WaiterController@destroy')->name('destroy.order');