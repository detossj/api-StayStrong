<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Routine;

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


    public function createDefault(Request $request)
    {
        $data = $request->validate([
            'type' => 'required|in:full_body,mono',
            'muscle_group' => 'required_if:type,mono|string',
            'date' => 'nullable|date',
        ]);

        $date = $data['date'] ?? now();

        
        $routine = $request->user()->routines()->create([
            'date' => $date,
        ]);

        
        if ($data['type'] === 'mono') {
            $exercises = Exercise::where('category', $data['muscle_group'])->get();
        } else { 
            
            $exercises = Exercise::whereIn('category', [
                'Pecho', 'Espalda', 'Piernas', 'Hombros', 'Brazos', 'Abdomen'
            ])
            ->inRandomOrder()
            ->limit(10)
            ->get();
        }

       
        foreach ($exercises as $exercise) {
            $routine->routineExercises()->create([
                'exercise_id' => $exercise->id
            ]);
        }

        return response()->json([
            'message' => 'Rutina generada con éxito',
            'routine' => $routine,
            'exercises_added' => $exercises
        ], 201);
        }

}
