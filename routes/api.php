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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/todos','TodoController@index');

Route::get('/filter','TodoController@filter');

Route::post('/create','TodoController@create');

Route::delete('/todos/delete','TodoController@destroy');

Route::put('/todo/update/{id}','TodoController@update');

/**Route for login API */
Route::post('/login', 'Api\ApiController@login');

/**Route for register API */
Route::post('/register', 'Api\ApiController@register');