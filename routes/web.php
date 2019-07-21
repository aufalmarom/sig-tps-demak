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
Route::get('/maps', 'HomeController@ReadMaps')->name('maps.read');
Route::get('/count', 'HomeController@ReadCount')->name('count.read');
Route::get('/bar', 'HomeController@ReadBar')->name('bar.read');
Route::get('/pie', 'HomeController@ReadPie')->name('pie.read');
Route::get('/datapilpres', 'DataController@ReadDataPilpres')->name('datapilpres.read');
Route::get('/datapilpres/{id}', 'DataController@DetailDataPilpres')->name('datapilpres.detail');
Route::get('/datadpd', 'DataController@ReadDataDPD')->name('datadpd.read');
Route::get('/datadpd/{id}', 'DataController@DetailDataDPD')->name('datadpd.detail');
Route::get('/datadprri', 'DataController@ReadDataDPRRI')->name('datadprri.read');
Route::get('/datadprri/{id}', 'DataController@DetailDataDPRRI')->name('datadprri.detail');
Route::get('/datadprdprovinsi', 'DataController@ReadDataDPRDProvinsi')->name('datadprdprovinsi.read');
Route::get('/datadprdprovinsi/{id}', 'DataController@DetailDataDPRDProvinsi')->name('datadprdprovinsi.detail');
Route::get('/datadprdkabupaten', 'DataController@ReadDataDPRDKabupaten')->name('datadprdkabupaten.read');
Route::get('/datadprdkabupaten/{id}', 'DataController@DetailDataDPRDKabupaten')->name('datadprdkabupaten.detail');
