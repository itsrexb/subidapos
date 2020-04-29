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

Route::get('/{catchall?}', function(){
	return view('welcome');
})->where('catchall', '(.*)');

//Route::get('/', 'HomeController@index')->name('home');

Route::get('/dashboard', function () {
    return view('dashboard/index');
});

Auth::routes();


/*Route::get('/unit', 'UnitController@index')->name('unit');
Route::get('/unit/new', 'UnitController@newUnit')->name('unit');
Route::get('/unit/delete/{id}', 'UnitController@destroy');
Route::get('/unit/edit/{unit}', 'UnitController@edit');
Route::post('/unit/new', 'UnitController@storeUnit');
Route::post('/unit/edit/{unit}', 'UnitController@storeUnit');

Route::get('/suppliers', 'SupplierController@index')->name('suppliers');
Route::get('/supplier/new', 'SupplierController@new')->name('suppliers');
Route::get('/supplier/delete/{id}', 'SupplierController@destroy')->name('suppliers');
Route::get('/supplier/edit/{supplier}', 'SupplierController@edit')->name('suppliers');
Route::post('/supplier/new', 'SupplierController@store')->name('suppliers');
Route::post('/supplier/edit/{supplier}', 'SupplierController@store')->name('suppliers');

Route::get('/products', 'ProductController@index')->name('products');
Route::get('/product/new', 'ProductController@new')->name('products');
Route::get('/product/delete/{id}', 'ProductController@destroy')->name('products');
Route::get('/product/edit/{product}', 'ProductController@edit')->name('products');
Route::post('/product/new', 'ProductController@store')->name('products');
Route::post('/product/edit/{product}', 'ProductController@store')->name('products');

Route::get('/recieving', 'UnitController@index')->name('recieving');
//Route::get('/pos', 'UnitController@index')->name('pos');
*/