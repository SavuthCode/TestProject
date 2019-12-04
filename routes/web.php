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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'auth'], function()
{
	Route::get('locale/{locale}', function ($locale){
		Session::put('locale', $locale);
		return redirect()->back();
	});
	Route::resource('properties', 'PropertyController');
	Route::resource('property_statuses', 'PropertyStatusController');
	Route::resource('property_types', 'PropertyTypeController');
	Route::resource('zones', 'ZoneController');
	Route::resource('shapes', 'ShapeController');
	Route::resource('property_price_histories', 'PropertyPriceHistoryController');
});



