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

Route::resource('/charts', 'ChartController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('journal/setting','JournalSettingController',['as'=>'journal']);

Route::resource('journal','JournalController');

Route::resource('vehicle/stock', 'VehicleController',['as'=>'vehicle']);

Route::resource('vehicle/sales', 'VehicleSalesController',['as'=>'vehicle']);