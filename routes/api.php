<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoutineController;
use App\Http\Controllers\RoutineExerciseController;
use App\Http\Controllers\SetController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\RoutineVideoController;
use App\Http\Controllers\RecipeController;


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {

    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/profile', [AuthController::class, 'profile']);
    Route::patch('/profile', [AuthController::class, 'updateProfile']);

    Route::get('/routines', [RoutineController::class, 'index']);
    Route::post('/routines', [RoutineController::class, 'store']);
    Route::post('/routines/default', [RoutineController::class, 'storeRoutine']);
    Route::delete('/routines/{routine}', [RoutineController::class, 'destroy']);

    Route::prefix('/routines/{routine}')->group(function () {
        Route::get('/exercises', [RoutineExerciseController::class, 'index']);
        Route::post('/exercises', [RoutineExerciseController::class, 'store']);
        Route::delete('/exercises/{routineExerciseId}', [RoutineExerciseController::class, 'destroy']);
    
    });

    Route::post('/routine-exercises/{routineExerciseId}/sets', [SetController::class, 'store']);
    Route::get('/routines/{routine}/exercises/{routineExerciseId}/sets', [SetController::class, 'index']);
    Route::put('/sets/{setId}', [SetController::class, 'update']);
    Route::delete('/sets/{setId}', [SetController::class, 'destroy']);

    Route::get('/exercises', [ExerciseController::class, 'index']);

    Route::get('/videos/random', [RoutineVideoController::class, 'random']);

    Route::get('/recipes', [RecipeController::class, 'index']);
    Route::get('/recipes/{id}', [RecipeController::class, 'show']);

    Route::get('/monthly-volume', [RoutineExerciseController::class, 'MonthlyVolume']);

});