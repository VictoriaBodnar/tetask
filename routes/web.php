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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/localStor', function () {
   return view('demoL');
});

Route::get('/','BpostController@index');
Route::post('/saveImg','BpostController@update');
//Route::get('/saveImg/{id}','BpostController@update');
