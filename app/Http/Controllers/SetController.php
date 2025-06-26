<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Set;

class SetController extends Controller
{
    /**
     * Crear un nuevo set para un RoutineExercise específico
     * @authenticated
     * @header Authorization Bearer {token}
     * @bodyParam reps integer required
     * @bodyParam weight integer required
     */
    public function store(Request $request, $routineExerciseId)
    {
        // Validar datos
        $validated = $request->validate([
            'reps' => 'required|integer|min:0',
            'weight' => 'required|numeric|min:0',
        ]);

        // Verificar que el RoutineExercise pertenezca al usuario autenticado
        $routineExercise = $request->user()->routineExercises()->find($routineExerciseId);

        if (!$routineExercise || $routineExercise->routine->user_id !== $request->user()->id) {
            return response()->json(['message' => 'No autorizado o no encontrado'], 404);
        }

        // Crear el set
        $set = $routineExercise->sets()->create($validated);

        return response()->json($set, 201);
    }

    /**
     * Actualizar un set existente
     * @authenticated
     * @header Authorization Bearer {token}
     * @bodyParam reps integer required
     * @bodyParam weight integer required
     */
    public function update(Request $request, $setId)
    {
        $validated = $request->validate([
            'reps' => 'required|integer|min:1',
            'weight' => 'required|numeric|min:0',
        ]);

        $set = Set::find($setId);

        if (!$set || $set->routineExercise->routine->user_id !== $request->user()->id) {
            return response()->json(['message' => 'No autorizado o no encontrado'], 404);
        }

        $set->update($validated);

        return response()->json($set);
    }

    /**
     * Eliminar un set existente
     * @authenticated
     * @header Authorization Bearer {token}
     */
    public function destroy(Request $request, $setId)
    {
        $set = Set::find($setId);

        if (!$set || $set->routineExercise->routine->user_id !== $request->user()->id) {
            return response()->json(['message' => 'No autorizado o no encontrado'], 404);
        }

        $set->delete();

        return response()->json(['message' => 'Set eliminado correctamente']);
    }


    //METODO GET
    /**
     * Lista todos las sets de un ejercicio autenticado
     * @authenticated
     * @header Authorization Bearer {token}
     */
    public function index(Request $request, $routineId, $routineExerciseId)
    {

        $routine = $request->user()->routines()->where('id', $routineId)->first();
    
        if (!$routine) {
            return response()->json(['message' => 'Rutina no encontrada '], 404);
        }
    
        $routineExercise = $routine->routineExercises()->where('id', $routineExerciseId)->first();
    
        if (!$routineExercise) {
            return response()->json(['message' => 'RoutineExercise no encontrado en esta rutina'], 404);
        }
    
        return response()->json($routineExercise->sets);
    }

}