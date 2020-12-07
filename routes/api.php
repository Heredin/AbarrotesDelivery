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
//enviar productos
Route::get('enviarproductos','Api\JsonController@enviarproductos');
Route::post('recibirpedido','Api\JsonController@recibirpedido');

//auth jwt
Route::post('register','Api\UserController@register');
Route::post('login','Api\UserController@login');
Route::get('logout','Api\UserController@logout');
Route::post('user','Api\UserController@getCurrentUser');
Route::post('update','Api\UserController@update');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
