<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\KotaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[MediaController::class,'index']);
Route::get('/media/formulir',[MediaController::class,'formulir']);
Route::post('/media/hasil',[MediaController::class,'hasil']);

Route::resource('kotas', KotaController::class);