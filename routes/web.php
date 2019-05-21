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


Route::get('/galleries','SiteController@galleries');


Route::get('/gallery/{gallery_id}', 'SiteController@gallery')->name('gallery');


Route::get('/services', 'SiteController@services')->name('home');

Route::get('/service/{id}', 'SiteController@services_single')->name('home');

Route::get('/application/create','SiteController@application_create');

Route::post('/application/create','SiteController@application_store');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin', function() {
    return view('admin.index');
});


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
Route::get('/admin/media/index/{content_id}/{content_type}','MediaController@get_by_type');
Route::get('/admin/media/create/{content_id}/{content_type}','MediaController@create');
Route::post('/admin/media/create/{content_id}/{content_type}','MediaController@store');
Route::get('/admin/media/update/{id}','MediaController@edit');
Route::post('/admin/media/update/{id}','MediaController@update');
Route::get('/admin/media/delete/{id}','MediaController@delete');
//*********************************************************************************************
Route::get('/admin/city/index','CityController@index');
Route::get('/admin/city/create','CityController@create');
Route::post('/admin/city/create','CityController@store');
Route::get('/admin/city/update/{id}','CityController@edit');
Route::post('/admin/city/update/{id}','CityController@update');
Route::get('/admin/city/delete/{id}','CityController@delete');
//*********************************************************************************************
Route::get('/admin/option/index','OptionController@index');
Route::get('/admin/option/create','OptionController@create');
Route::post('/admin/option/create','OptionController@store');
Route::get('/admin/option/update/{id}','OptionController@edit');
Route::post('/admin/option/update/{id}','OptionController@update');
Route::get('/admin/option/delete/{id}','OptionController@delete');
//*********************************************************************************************
Route::get('setlocale/{locale}', function ($locale) {
  if (in_array($locale, \Config::get('app.locales'))) {
    Session::put('locale', $locale);
  }
  return redirect()->back();
});
