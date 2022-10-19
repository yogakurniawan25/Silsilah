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

Route::get('keluargabudi/{status}', [App\Http\Controllers\apiController::class, 'ListkeluargaBudi']);
Route::get('listperempuan/{status}', [App\Http\Controllers\apiController::class, 'Listperempuan']);
Route::get('sepupulaki', [App\Http\Controllers\apiController::class, 'sepupulaki']);

//CRUD
Route::post('insert', [App\Http\Controllers\apiController::class, 'insert']);
Route::post("update/{id}", [App\Http\Controllers\apiController::class, 'update']);
Route::post("delete/{id}", [App\Http\Controllers\apiController::class, 'delete']);
Route::get('keluargabudi', [App\Http\Controllers\apiController::class, 'keluargabudi']);