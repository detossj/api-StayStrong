<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoutineController;
use App\Http\Controllers\RoutineExerciseController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {

    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/profile', [AuthController::class, 'profile']);

    Route::apiResource('routines', RoutineController::class);
    Route::prefix('/routines/{routine}')->group(function () {
        Route::get('/exercises', [RoutineExerciseController::class, 'index']);
        Route::post('/exercises', [RoutineExerciseController::class, 'store']);
    });


});