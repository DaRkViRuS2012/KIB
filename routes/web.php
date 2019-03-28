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


//*********************************************************************************************


Route::get('/admin/about us/index','AboutUsController@index');


Route::get('/admin/about us/create','AboutUsController@create');
Route::post('/admin/about us/create','AboutUsController@store');

Route::get('/admin/about us/update/{id}','AboutUsController@edit');
Route::post('/admin/about us/update/{id}','AboutUsController@update');

Route::get('/admin/about us/delete/{id}','AboutUsController@delete');