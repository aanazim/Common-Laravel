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

//Frontend
Route::get('/','LayoutController@frontend')->name('layout');


//Backend
 

Route::group(["prefix"=>'admin', 'middleware'=>['auth', 'admin'], 'namespace'=>'admin'],
	function(){


  Route::get('dashboard/','DashboardController@dashboard')->name('dashboard');

});




Auth::routes();


/*Route::get('/home', 'HomeController@index')->name('home');*/
