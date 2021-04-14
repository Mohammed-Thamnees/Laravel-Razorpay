<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'MainController@index')->name('home');
Route::get('/success', 'MainController@success');
Route::post('/payment', 'MainController@payment')->name('payment');

Route::post('/pay' , 'MainController@pay');
Route::get('/error' , 'MainController@error');

