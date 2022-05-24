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

Route::get('/', function () {
	return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@show');
Route::prefix('admin')->middleware('admin_area')->group(function(){
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/form', 'HomeController@index')->name('home');
});
Route::prefix('nutritionist')->middleware('nutritionist')->group(function(){
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/form', 'HomeController@index')->name('home');
});
