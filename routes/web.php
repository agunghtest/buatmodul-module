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

Route::get('/', 
	function(){ 
		if(!cas()->isAuthenticated()){
			return redirect('login');
		}
		return view('welcome');
	}
);

Route::get('login', 'UserController@login');
Route::get('sso', 'UserController@sso');

Route::get('/logout', 
	function(){ 
		if(cas()->isAuthenticated()){
			cas()->logout();
		}
	}
);