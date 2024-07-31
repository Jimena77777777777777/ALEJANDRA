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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// rutas de job
Route::get('/trabajo', [App\Http\Controllers\JobController::class, 'index']);

Route::get('/trabajo/create', [App\Http\Controllers\JobController::class, 'create']);
Route::get('/trabajo/{job}/edit', [App\Http\Controllers\JobController::class, 'edit']);
Route::post('/trabajo', [App\Http\Controllers\JobController::class, 'senData']);

