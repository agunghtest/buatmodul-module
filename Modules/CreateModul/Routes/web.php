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

Route::prefix('createmodul')->group(function() {
    Route::get('/', 'CreateModulController@index');
    Route::get('/create', 'CreateModulController@getCreate');
 
});
