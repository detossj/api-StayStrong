<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoutineController;
use App\Http\Controllers\RoutineExerciseController;
use App\Http\Controllers\SetController;
use App\Http\Controllers\ExerciseController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {

    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/profile', [AuthController::class, 'profile']);

    Route::apiResource('routines', RoutineController::class);
    

    Route::prefix('/routines/{routine}')->group(function () {
        Route::get('/exercises', [RoutineExerciseController::class, 'index']);
        Route::post('/exercises', [RoutineExerciseController::class, 'store']);
        Route::delete('/exercises/{routineExerciseId}', [RoutineExerciseController::class, 'destroy']);
    
    });

    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/routine-exercises/{routineExerciseId}/sets', [SetController::class, 'store']);
        Route::put('/sets/{setId}', [SetController::class, 'update']);
        Route::delete('/sets/{setId}', [SetController::class, 'destroy']);
    });
    

    Route::get('/exercises', [ExerciseController::class, 'index']);



});