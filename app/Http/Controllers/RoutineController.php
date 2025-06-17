<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutineController extends Controller
{
     //METODO POST

    /**
     * Crea una nueva rutina para el usuario autenticado
     * @authenticated
     * @header Authorization Bearer {token}
     * @bodyParam user_id integer required
     * @bodyParam date date required
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|integer|exists:users,id',
            'date' => 'required|date',

        ]);

        $routine = $request->user()->routines()->create($validated);
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
