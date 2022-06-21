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
//
// Route::get('/', function () {
// 	return view('welcome');
// });

Auth::routes();

Route::prefix('admin')->middleware('admin_area')->group(function(){
	Route::get('/home', 'UserController@index');

	Route::get('/plan', 'UserController@plan');

	Route::get('/health', 'HealthConditionController@index');

	Route::post('/health', 'HealthConditionController@create');

	Route::get('/add_health', 'HealthConditionController@add_health');

	Route::get('/delete_health/{id}', 'HealthConditionController@delete');

	Route::get('/edit_health/{id}', 'HealthConditionController@edit');

	Route::post('/edit_health/{id}', 'HealthConditionController@edit');

	Route::get('/delete_user/{id}', 'UserController@delete');
	// Route::get('/edit_user_admin/{id}', 'UserController@admin_role');
	// Route::get('/edit_user_nutritionist/{id}', 'UserController@nutritionist_role');
	Route::get('/approve/{id}', 'UserController@approve');

	Route::get('/approve_plan/{id}', 'UserController@approve_plan');

	Route::get('/delete_plan/{id}', 'UserController@delete_plan');

	Route::get('/cancel_plan/{id}', 'UserController@cancel_plan');

	Route::get('/meal/{id}', 'Nutritionist\\DietPlanController@viewmeal');

	Route::get('/approve_meal/{id}', 'Nutritionist\\MealController@approve');

	Route::get('/cancel_meal/{id}', 'Nutritionist\\MealController@cancel_meal');
});
Route::prefix('nutritionist')->middleware('nutritionist')->group(function(){
	Route::get('/home', 'Nutritionist\\DietPlanController@index');

	Route::post('/home', 'Nutritionist\\DietPlanController@create');

	Route::get('/add_plan', 'Nutritionist\\DietPlanController@add_plan');

	Route::get('/delete_plan/{id}', 'Nutritionist\\DietPlanController@delete');

	Route::get('/approve/{id}', 'Nutritionist\\DietPlanController@approve');

	Route::get('/edit_plan/{id}', 'Nutritionist\\DietPlanController@edit');

	Route::post('/edit_plan/{id}', 'Nutritionist\\DietPlanController@edit');
	// Route::post('/add_plan', 'Nutritionist\\DietPlanController@create');
	Route::get('/meal', 'Nutritionist\\MealController@index');

	Route::post('/meal', 'Nutritionist\\MealController@create');

	Route::get('/add_meal', 'Nutritionist\\MealController@add_meal');

	Route::get('/delete_meal/{id}', 'Nutritionist\\MealController@delete');

	Route::get('/update_meal/{id}', 'Nutritionist\\MealController@update');

	Route::post('/update_meal/{id}', 'Nutritionist\\MealController@update');
});

Route::middleware(['auth', 'customer'])->group(function(){
	Route::get('/cart', 'CartItemController@index');

	Route::post('/cart', 'CartItemController@create');

	Route::get('/checkout', 'CartItemController@checkout');

	Route::post('/checkout', 'CartItemController@checkout');

	Route::get('/delete_cart', 'CartItemController@delete_all');

	Route::get('/profile', 'UserController@profile');
	Route::get('/nutritionist/{id}', 'UserController@nutritionistprofile');

	Route::get('stripe', 'StripePaymentController@stripe');

	Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');

	Route::get('/my-plans', 'MyPlansController@index');
	// Route::post('/my-plan', 'MyPlansController@my_plan');
	Route::get('/meal/{id}', 'MyPlansController@my_meal');

	Route::get('/view_plan/{id}', 'MyPlansController@view_plans');

	Route::get('/thank_you', 'HomeController@thankyou');

	Route::post('/plan/{id}', 'FeedbackController@create');

	Route::get('/plan/{id}', 'HomeController@plan');
	Route::get('/wishlist', 'UserController@wishlist');
});

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/plans', 'HomeController@plans');

Route::get('/delete_plan/{id}', 'CartItemController@delete');

Route::get('wishlist/{id}', 'HomeController@add_to_wishlist');
// Route::get('/', 'DietPlanController@show');


