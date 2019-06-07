<?php

use Illuminate\Http\Request;
use App\Application;
use App\Option;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Service;
use App\ApplicationOption;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/aboutus','AboutUsController@index_api');

Route::get('/contacts','ContactController@index_api');

Route::get('/partners','PartnerController@index_api');

Route::get('/galleries','GalleryController@index_api');

Route::get('/galleries/{id}','GalleryController@show_api');

Route::get('/news','NewsController@index_api');

Route::get('/services','ServiceController@index_api');

Route::get('/options','OptionController@index_api');

Route::get('/sms','UserController@send_sms');

Route::get('/sms','UserController@send_sms_post');

Route::get('/service/sub/{service_id}', 'ServiceController@get_sons_api');

Route::get('/options/{service_id}','OptionController@get_by_service');

// Route::get('/city/{city_id}','CityController@get_cities_api');

Route::get('/applications', 'ApplicationController@index_api');

Route::get('/products', 'ServiceController@product_index_api');

Route::post('/register', 'UserController@store_api');

Route::post('/login', 'UserController@login_api');


Route::get('/cities','CityController@get_cities_api');


Route::get('/product/sub/{id}', 'SiteController@product_sons_api')->name('home');


Route::post('/user/active','UserController@active_api');


Route::post('/user/update_token','UserController@update_token_api');

