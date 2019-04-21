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

Route::get('/dashboard', function () {
    return view('dashboard/index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/unit', 'UnitController@index')->name('unit');
Route::get('/unit/new', 'UnitController@newUnit')->name('unit');
Route::get('/unit/delete/{id}', 'UnitController@destroy');
Route::get('/unit/edit/{unit}', 'UnitController@edit');
Route::post('/unit/new', 'UnitController@storeUnit');
Route::post('/unit/edit/{unit}', 'UnitController@storeUnit');

Route::get('/suppliers', 'UnitController@index')->name('suppliers');
Route::get('/recieving', 'UnitController@index')->name('recieving');
Route::get('/pos', 'UnitController@index')->name('pos');
