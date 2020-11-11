<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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






