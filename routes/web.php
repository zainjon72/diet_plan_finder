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
	Route::get('/plans', 'HomeController@index')->name('home');
	// Route::post('/plans', 'HomeController@index')->name('home');
	Route::get('/delete_plan/{id}', 'HomeController@delete')->name('home');
	Route::get('/approve_plan/{id}', 'HomeController@approve');
	Route::get('/form', 'HomeController@view')->name('home');
	Route::post('/form', 'HealthConditionController@index')->name('home');
	Route::get('/home', 'UserController@index');
	Route::get('/update/{id}', 'UserController@approve');
	Route::get('/edit/{id}', 'HealthConditionController@update');
	Route::post('/edit/{id}', 'HealthConditionController@update');
	Route::get('/delete/{id}', 'UserController@delete');
	Route::get('/approve/{id}', 'UserController@approve');
	
	Route::get('/delete-health/{id}', 'HealthConditionController@delete');
	Route::post('/add-health', 'HealthConditionController@add');
	Route::get('/add-health', 'HealthConditionController@index');
	// ->name('home');
});
Route::prefix('nutritionist')->middleware('nutritionist')->group(function(){
	Route::get('/home', 'DietPlanController@index');
	// Route::get('/home', 'DietPlanController@show');
	Route::post('/home', 'DietPlanController@create')->name('home');
	Route::get('/form', 'DietPlanController@view');
	Route::get('/edit_plan/{id}', 'DietPlanController@edit');
	Route::post('/edit_plan/{id}', 'DietPlanController@edit');
	Route::get('/delete_plan/{id}', 'DietPlanController@delete');
	Route::get('/meal', 'MealController@index');
	Route::post('/meal', 'MealController@store');
	Route::get('/edit_meal/{id}', 'MealController@edit');
	Route::post('/edit_meal/{id}', 'MealController@edit');
	Route::get('/delete_meal/{id}', 'MealController@delete');
	

});
