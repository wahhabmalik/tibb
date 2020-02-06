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
});


Route::group([
	'prefix' => 'public',
	'as' => 'public.'
	],function(){


});


Route::get('/register-patient', function () {
        return view('auth.register-patient');
    })->name('register-patient');


