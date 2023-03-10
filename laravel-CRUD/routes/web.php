<?php

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

Route::get('/', function () {
    return view('index');
});

Route::resource('users', App\Http\Controllers\UserController::class);
Route::put('/users/{id}', [App\Http\Controllers\UserController::class, 'update']);
//Route::post('/save', [App\Http\Controllers\UserController::class, 'save']);
//Route::get('/register', [App\Http\Controllers\UserController::class, 'register']);
//Route::get('/users', [App\Http\Controllers\UserController::class, 'index']);
//Route::get('/users/{id}', [App\Http\Controllers\UserController::class, 'show']);
