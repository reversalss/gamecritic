<?php

use App\Http\Controllers\IGDBController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [IGDBController::class, 'gettopgames']);

Route::get('/login', function () {
    return view('auth.login');
})->name('login');


Route::get('/register', function () {
    return view('auth.register');
})->name('register');






Route::post('/register', [userController::class, 'register']);
Route::post('/login', [userController::class, 'login']);
Route::get('/logout', [userController::class, 'logout']);



Route::get('/gettopgames,', [IGDBController::class, 'getTopGames']);