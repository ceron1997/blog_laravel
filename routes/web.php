<?php

use App\Http\Controllers\CursosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 

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


Route::get('/',HomeController::class);
Route::get('cursos',[CursosController::class, 'index']);
Route::get('cursos/create',[CursosController::class, 'create']);
Route::get('cursos/{curso}',[CursosController::class, 'show']);
