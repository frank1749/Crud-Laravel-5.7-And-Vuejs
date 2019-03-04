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

Route::group(['prefix' => 'v1'], function () {

	Route::get('/dataSite', 'ShareController@load_data');
	Route::post('/infoData', 'ShareController@infoData');
	Route::post('/insertData', 'ShareController@store');
	Route::post('/deleteData', 'ShareController@del_data');
	Route::post('/updateData', 'ShareController@update');

	Route::get('/prueba_data', 'ShareController@probar');

});