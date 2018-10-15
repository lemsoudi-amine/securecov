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

Route::get('/','CovoiturageController@index')->name('covoiturage');
Route::get('covoiturage/index','CovoiturageController@index')->name('covoiturage');
Route::get('covoiturage/create','CovoiturageController@create')->name('covoiturage');
Route::get('covoiturage/store','CovoiturageController@store')->name('covoiturage');
