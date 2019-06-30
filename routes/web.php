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

Route::get('/', 'HomeController@ReadLandingPage')->name('landingpage');
Route::get('/home', 'HomeController@ReadDashboard')->name('home');
Route::get('/datapilpres', 'DataController@ReadDataPilpres')->name('datapilpres.read');
Route::get('/datadpdri', 'DataController@ReadDataDPDRI')->name('datadpdri.read');
Route::get('/datadprri', 'DataController@ReadDataDPRRI')->name('datadprri.read');
Route::get('/datadprdprovinsi', 'DataController@ReadDataDPRDProvinsi')->name('datadprdprovinsi.read');
Route::get('/datadprdkabupaten', 'DataController@ReadDataDPRDKabupaten')->name('datadprdkabupaten.read');
