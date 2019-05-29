<?php

use Illuminate\Http\Request;

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

Route::get('/city/{city_id}','CityController@get_cities_api');

