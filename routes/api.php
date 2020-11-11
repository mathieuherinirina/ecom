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

Route::get('cart', 'CartsController@index');
Route::get('cart/create', 'CartsController@create');
Route::post('cart/store', 'CartsController@store');
Route::get('cart/show', 'CartsController@show');
Route::get('cart/edit', 'CartsController@edit');
Route::post('cart/update', 'CartsController@update');
Route::get('cart/destroy', 'CartsController@destroy');


// ROUTE pour le controller CATEGORY

Route::get('categories', 'CategorieController@index');
Route::get('categories/create', 'CategorieController@create');
Route::post('categories/store', 'CategorieController@store');
Route::get('categories/show', 'CategorieController@show');
Route::get('categories/edit', 'CategorieController@edit');
Route::post('categories/update', 'CategorieController@update');
Route::get('categories/destroy', 'CategorieController@destroy');


// ROUTE pour le controller PRODUITS

Route::get('Produits', 'ProduitsController@index');
Route::get('produits/create', 'ProduitsController@create');
Route::post('produits/store', 'ProduitsController@store');
Route::get('produits/show', 'ProduitsController@show');
Route::get('produits/edit', 'ProduitsController@edit');
Route::post('produits/update', 'ProduitsController@update');
Route::get('produits/destroy', 'ProduitsController@destroy');
