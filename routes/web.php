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


/*
|--------------------------------------------------------------------------
| Clear Cache
|--------------------------------------------------------------------------
|
*/
Route::get('/clear', function(){
  Artisan::call('cache:clear');
  // Artisan::call('route:cache');
  Artisan::call('view:clear');
  Artisan::call('config:cache');
  return "Done! Go Back and Refresh Page Please";
})->name('clear');


Auth::routes();

Route::get('/', function () {
        return view('frontend.index');
    })->name('/');

Route::group([
		'middleware' => 'auth'
	],function(){

	Route::get('/home', 'HomeController@index')->name('home');

	/*
	|-----------------------------------
	|Dashboard Routes 
	|-----------------------------------
	*/
	Route::get('/dashboard', 'HomeController@index')->name('dashboard');


	/*
	|-----------------------------------
	|Physician Routes 
	|-----------------------------------
	*/
	Route::resource('physician', 'PhysicianController');
	

	/*
	|-----------------------------------
	|Patient Routes 
	|-----------------------------------
	*/
	Route::resource('patient', 'PatientController');
	

	/*
	|-----------------------------------
	|Pharmacist Routes 
	|-----------------------------------
	*/
	Route::resource('pharmacist', 'PharmacistController');


	/*
	|-----------------------------------
	|Pharmacist Routes 
	|-----------------------------------
	*/

	Route::get('/rx-order/{patient}', 'RxOrderController@create')->name('rx_order');
	Route::post('/import_csv/', 'RxOrderController@import')->name('import_csv');
	Route::resource('rx_order', 'RxOrderController');
});


Route::group([
	'prefix' => 'public',
	'as' => 'public.'
	],function(){


});


Route::get('/register-patient', function () {
        return view('auth.register-patient');
    })->name('register-patient');

Route::get('/register-physician', function () {
        return view('auth.register-physician');
    })->name('register-physician');

Route::get('/register-pharmacist', function () {
        return view('auth.register-pharmacist');
    })->name('register-pharmacist');


