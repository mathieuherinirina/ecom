<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProduitsController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CartController;
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

// Route::get('/users', function () {
//   return view('users/index');
// });

Route::resource('users', UserController::class)->names(['users' => 'users.index']);
Route::resource('users', UserController::class)->names(['users' => 'users.store']);
Route::resource('users', UserController::class)->names(['users' => 'users.create']);
Route::resource('users', UserController::class)->names(['users' => 'users.show']);
Route::resource('users', UserController::class)->names(['users' => 'users.update']);
Route::resource('users', UserController::class)->names(['users' => 'users.destroy']);
Route::resource('users', UserController::class)->names(['users' => 'users.edit']);

// route produits

Route::resource('produits', ProduitsController::class)->names(['produits' => 'produits.index']);
Route::resource('produits', ProduitsController::class)->names(['produits' => 'produits.store']);
Route::resource('produits', ProduitsController::class)->names(['produits' => 'produits.create']);
Route::resource('produits', ProduitsController::class)->names(['produits' => 'produits.show']);
Route::resource('produits', ProduitsController::class)->names(['produits' => 'produits.update']);
Route::resource('produits', ProduitsController::class)->names(['produits' => 'produits.destroy']);
Route::resource('produits', ProduitsController::class)->names(['produits' => 'produits.edit']);

//route categories

Route::resource('categories', CategorieController::class)->names(['categories' => 'categorie.index']);
Route::resource('categories', CategorieController::class)->names(['categories' => 'categorie.store']);
Route::resource('categories', CategorieController::class)->names(['categories' => 'categorie.create']);
Route::resource('categories', CategorieController::class)->names(['categories' => 'categorie.show']);
Route::resource('categories', CategorieController::class)->names(['categories' => 'categorie.update']);
Route::resource('categories', CategorieController::class)->names(['categories' => 'categorie.destroy']);
Route::resource('categories', CategorieController::class)->names(['categories' => 'categorie.edit']);

//route carts

Route::resource('carts', CartsController::class)->names(['carts' => 'carts.index']);
Route::resource('carts', CartsController::class)->names(['carts' => 'carts.store']);
Route::resource('carts', CartsController::class)->names(['carts' => 'carts.create']);
Route::resource('carts', CartsController::class)->names(['carts' => 'carts.show']);
Route::resource('carts', CartsController::class)->names(['carts' => 'carts.update']);
Route::resource('carts', CartsController::class)->names(['carts' => 'carts.destroy']);
Route::resource('carts', CartsController::class)->names(['carts' => 'carts.edit']);





