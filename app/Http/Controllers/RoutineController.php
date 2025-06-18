<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Routine;

class RoutineController extends Controller
{
     //METODO POST

    /**
     * Crea una nueva rutina para el usuario autenticado
     * @authenticated
     * @header Authorization Bearer {token}
     */
    public function store(Request $request)
    {
        $routine = $request->user()->routines()->create([
            'date' => now(),
        ]);

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



}
