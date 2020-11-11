<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


// ROUTE pour le controller USERCONTROLLER

Route::get('user', 'UserController@index');
Route::get('user/create', 'UserController@create');
Route::post('user/store', 'UserController@store');
Route::get('user/show', 'UserController@show');
Route::get('user/edit', 'UserController@edit');
Route::post('user/update', 'UserController@update');
Route::get('user/destroy', 'UserController@destroy');

// ROUTE pour le controller CARTS
// ROUTE pour le controller CATEGORY
// ROUTE pour le controller PRODUITS