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
    return view('main_site.index');
});



Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');


//*********************************************************************************************
Route::get('/admin/about/index','AboutUsController@index');
Route::get('/admin/about/create','AboutUsController@create');
Route::post('/admin/about/create','AboutUsController@store');
Route::get('/admin/about/update/{id}','AboutUsController@edit');
Route::post('/admin/about/update/{id}','AboutUsController@update');
Route::get('/admin/about/delete/{id}','AboutUsController@delete');
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
//*********************************************************************************************
Route::get('/admin/gallery/index','GalleryController@index');
Route::get('/admin/gallery/create','GalleryController@create');
Route::post('/admin/gallery/create','GalleryController@store');
Route::get('/admin/gallery/update/{id}','GalleryController@edit');
Route::post('/admin/gallery/update/{id}','GalleryController@update');
Route::get('/admin/gallery/delete/{id}','GalleryController@delete');
//*********************************************************************************************
Route::get('/admin/news/index','NewsController@index');
Route::get('/admin/news/create','NewsController@create');
Route::post('/admin/news/create','NewsController@store');
Route::get('/admin/news/update/{id}','NewsController@edit');
Route::post('/admin/news/update/{id}','NewsController@update');
Route::get('/admin/news/delete/{id}','NewsController@delete');
//*********************************************************************************************
Route::get('/admin/service/index','ServiceController@index');
Route::get('/admin/service/create','ServiceController@create');
Route::post('/admin/service/create','ServiceController@store');
Route::get('/admin/service/update/{id}','ServiceController@edit');
Route::post('/admin/service/update/{id}','ServiceController@update');
Route::get('/admin/service/delete/{id}','ServiceController@delete');
//*********************************************************************************************
Route::get('/admin/slider/index','SliderController@index');
Route::get('/admin/slider/create','SliderController@create');
Route::post('/admin/slider/create','SliderController@store');
Route::get('/admin/slider/update/{id}','SliderController@edit');
Route::post('/admin/slider/update/{id}','SliderController@update');
Route::get('/admin/slider/delete/{id}','SliderController@delete');
//*********************************************************************************************
Route::get('/admin/media/index/{content_id}/{media_type}','MediaController@get_by_type');
Route::get('/admin/media/create','MediaController@create');
Route::post('/admin/media/create','MediaController@store');
Route::get('/admin/media/update/{id}/{type}','MediaController@edit');
Route::post('/admin/media/update/{id}/{type}','MediaController@update');
Route::get('/admin/media/delete/{id}','MediaController@delete');