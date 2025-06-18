<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutineExerciseController extends Controller
{
    //METODO POST
    /**
     * Crea un nueva rutina de ejercicios para el usuario autenticado
     * @authenticated
     * @header Authorization Bearer {token}
     * @bodyParam order integer optional
     */

     public function store(Request $request, $routineId) {
        $validated = $request->validate([
            'order'         => 'nullable|integer',
            'exercise_id'   => 'required|exists:exercises,id',
        ]);

        // Verifica que la rutina le pertenezca al usuario
        $routine = $request->user()->routines()->find($routineId);

        if (!$routine) {
            return response()->json(['message' => 'Rutina no encontrada'], 404);
        }


       // Crea el nuevo ejercicio en la rutina
       $routineExercise = $routine->routineExercises()->create($validated);

       return response()->json($routineExercise, 201);
    }

    //METODO GET

    /**
     * Lista todos las rutinas de ejercicios autenticado
     * @authenticated
     * @header Authorization Bearer {token}
     */

    public function index(Request $request, $routineId) {
        $routine = $request->user()->routines()->find($routineId);

        if (!$routine) {
            return response()->json(['message' => 'Rutina no encontrada'], 404);
        }

        return response()->json($routine->routineExercises()->with('exercise')->get());
    }
}
