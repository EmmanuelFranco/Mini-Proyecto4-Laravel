<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\DocentesController;
use App\Http\Controllers\EstudianteController;
use App\Models\Docentes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(DocentesController::class)->group(function(){
    Route::get('/docentes','index');
    Route::get('/docentes/{id}','show');
    Route::post('/docentes','store');
    Route::put('/docentes/{id}','update');
    Route::delete('/docentes/{id}','destroy');
});


Route::controller(EstudianteController::class)->group(function(){
    Route::get('/estudiante','index');
    Route::get('/estudiante/{id}','show');
    Route::post('/estudiante','store');
    Route::put('/estudiante/{id}','update');
    Route::delete('/estudiante/{id}','destroy');
});



Route::controller(CursoController::class)->group(function(){
    Route::get('/curso','index');
    Route::get('/curso/{id}','show');
    Route::post('/curso','store');
    Route::put('/curso/{id}','update');
    Route::delete('/curso/{id}','destroy');
});