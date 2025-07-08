<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Routine;
use App\Models\Exercise;

class RoutineController extends Controller
{

    /**
     * Lista las rutinas del usuario autenticado
     * @authenticated
     * @header Authorization Bearer {token}
     */
    public function index(Request $request)
    {
        $routines = $request->user()->routines()->get();
        return response()->json($routines);
    }

     //METODO POST

    /**
     * Crea una nueva rutina para el usuario autenticado
     * @authenticated
     * @header Authorization Bearer {token}
     */
    public function store(Request $request)
    {
        $data = $request->validate([
        'date' => 'required|date',]);

        $routine = $request->user()->routines()->create([
        'date' => $data['date'],]);

        return response()->json($routine, 201);
    }

    //METODO GET

    /**
     * Muestra una rutina específica del usuario
     * @authenticated
     * @header Authorization Bearer {token}
     */
    public function show(Request $request, $id)
    {
        $routine = $request->user()->routines()->find($id);
        if (!$routine) {
            return response()->json(['message' => 'Rutina no encontrada'], 404);
        }

        return response()->json($routine);
    }

    public function storeRoutine(Request $request)
    {
        try {
            $data = $request->validate([
                'date' => 'required|date',
                'type' => 'required|string',  // full_body o categoria
            ]);
    
            $routine = $request->user()->routines()->create([
                'date' => $data['date'],
            ]);
    
            $exercises = collect();
    
            if ($data['type'] === 'full_body') {
                // Full body: un ejercicio por cada categoría
            } else {
                // Rutina por categoría
                $exercises = Exercise::where('category', $data['type'])->inRandomOrder()->limit(5)->get();
            }
            
    
            foreach ($exercises as $exercise) {
                $routine->routineExercises()->create([
                    'exercise_id' => $exercise->id,
                ]);
            }
    
            return response()->json([
                'message' => 'Rutina creada exitosamente',
                'routine' => $routine->load('routineExercises.exercise'),
            ], 201);
    
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error interno: ' . $e->getMessage(),
            ], 500);
        }
    }
    
}
