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
//*********************************************************************************************
Route::get('/admin/company/index','CompanyController@index');
Route::get('/admin/company/create','CompanyController@create');
Route::post('/admin/company/create','CompanyController@store');
Route::get('/admin/company/update/{id}','CompanyController@edit');
Route::post('/admin/company/update/{id}','CompanyController@update');
Route::get('/admin/company/delete/{id}','CompanyController@delete');
//*********************************************************************************************
Route::get('/admin/contact/index','ContactController@index');
Route::get('/admin/contact/create','ContactController@create');
Route::post('/admin/contact/create','ContactController@store');
Route::get('/admin/contact/update/{id}','ContactController@edit');
Route::post('/admin/contact/update/{id}','ContactController@update');
Route::get('/admin/contact/delete/{id}','ContactController@delete');
//*********************************************************************************************
Route::get('/admin/partner/index','PartnerController@index');
Route::get('/admin/partner/create','PartnerController@create');
Route::post('/admin/partner/create','PartnerController@store');
Route::get('/admin/partner/update/{id}','PartnerController@edit');
Route::post('/admin/partner/update/{id}','PartnerController@update');
Route::get('/admin/partner/delete/{id}','PartnerController@delete');