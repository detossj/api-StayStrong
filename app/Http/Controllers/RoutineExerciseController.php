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
    
        // Trae los ejercicios de la rutina con sets y ejercicio relacionado
        $routineExercises = $routine->routineExercises()
            ->with(['exercise', 'sets'])
            ->orderBy('order')
            ->get();
    
        // Transforma para agrupar de forma limpia
        $result = $routineExercises->map(function ($routineExercise) {
            return [
                'id' => $routineExercise->exercise->id,
                'name' => $routineExercise->exercise->name,
                'description' => $routineExercise->exercise->description,
                'order' => $routineExercise->order,
                'sets' => $routineExercise->sets->map(function ($set) {
                    return [
                        'id' => $set->id,
                        'reps' => $set->reps,
                        'weight' => $set->weight,
                    ];
                }),
            ];
        });
    
        return response()->json($result);
    }
    
}
