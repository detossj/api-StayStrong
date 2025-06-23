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
     */

    public function store(Request $request, $routineId) {
        $validated = $request->validate([
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
    
        $routineExercises = $routine->routineExercises()
            ->with(['exercise', 'sets'])
            ->orderBy('id')  
            ->get();
    
        $result = $routineExercises->map(function ($routineExercise) {
            return [
                'id' => $routineExercise->id,
                'exercise' => [
                    'id' => $routineExercise->exercise->id,
                    'name' => $routineExercise->exercise->name,
                    'description' => $routineExercise->exercise->description,
                    'image_path' => $routineExercise->exercise->image_path,
                ],

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
    
    
    //METODO DELETE

    /**
     * Eliminar ejercicio de rutina autenticado
     * @authenticated
     * @header Authorization Bearer {token}
     */
    public function destroy(Request $request, $routineExerciseId)
    {
        // Buscar el RoutineExercise con su rutina y usuario
        $routineExercise = \App\Models\RoutineExercise::with('routine')->find($routineExerciseId);

        // Verificar que exista y que la rutina pertenezca al usuario autenticado
        if (!$routineExercise || $routineExercise->routine->user_id !== $request->user()->id) {
            return response()->json(['message' => 'No autorizado o no encontrado'], 404);
        }

        // Eliminar el RoutineExercise
        $routineExercise->delete();

        return response()->json(['message' => 'Ejercicio eliminado de la rutina correctamente']);
    }

    
    
}
