<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CartController;
use Illuminate\Http\Request;
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
    return view('homepage');
});

// route users
Route::resource('users', UserController::class)->names(['users' => 'users.index']);
Route::resource('users', UserController::class)->names(['users' => 'users.store']);
Route::resource('users', UserController::class)->names(['users' => 'users.create']);
Route::resource('users', UserController::class)->names(['users' => 'users.show']);
Route::resource('users', UserController::class)->names(['users' => 'users.update']);
Route::resource('users', UserController::class)->names(['users' => 'users.destroy']);
Route::resource('users', UserController::class)->names(['users' => 'users.edit']);

// route produits

Route::resource('produits', ProduitController::class)->names(['produits' => 'produits.index']);
Route::resource('produits', ProduitController::class)->names(['produits' => 'produits.store']);
Route::resource('produits', ProduitController::class)->names(['produits' => 'produits.create']);
Route::resource('produits', ProduitController::class)->names(['produits' => 'produits.show']);
Route::resource('produits', ProduitController::class)->names(['produits' => 'produits.update']);
Route::resource('produits', ProduitController::class)->names(['produits' => 'produits.destroy']);
Route::resource('produits', ProduitController::class)->names(['produits' => 'produits.edit']);

// //route categories

Route::resource('categories', CategorieController::class)->names(['categories' => 'categories.index']);
Route::resource('categories', CategorieController::class)->names(['categories' => 'categories.store']);
Route::resource('categories', CategorieController::class)->names(['categories' => 'categories.create']);
Route::resource('categories', CategorieController::class)->names(['categories' => 'categories.show']);
Route::resource('categories', CategorieController::class)->names(['categories' => 'categories.update']);
Route::resource('categories', CategorieController::class)->names(['categories' => 'categories.destroy']);
Route::resource('categories', CategorieController::class)->names(['categories' => 'categories.edit']);

// //route carts

Route::resource('carts', CartController::class)->names(['carts' => 'carts.index']);
Route::resource('carts', CartController::class)->names(['carts' => 'carts.store']);
Route::resource('carts', CartController::class)->names(['carts' => 'carts.create']);
Route::resource('carts', CartController::class)->names(['carts' => 'carts.show']);
Route::resource('carts', CartController::class)->names(['carts' => 'carts.update']);
Route::resource('carts', CartController::class)->names(['carts' => 'carts.destroy']);
Route::resource('carts', CartController::class)->names(['carts' => 'carts.edit']);





