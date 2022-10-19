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

Route::get('/', [App\Http\Controllers\appController::class, 'index'])->name('home');
Route::get('/add', [App\Http\Controllers\appController::class, 'addorg']);
Route::post('/insert', [App\Http\Controllers\appController::class, 'insert']);
Route::get('/edit/{id}', [App\Http\Controllers\appController::class, 'edit']);
Route::post('/update/{id}', [App\Http\Controllers\appController::class, 'update']);
Route::post('/insert', [App\Http\Controllers\appController::class, 'insert']);
Route::get('/delete/{id}', [App\Http\Controllers\appController::class, 'delete']);
Route::get('/detail/{id}', [App\Http\Controllers\appController::class, 'detail']);
