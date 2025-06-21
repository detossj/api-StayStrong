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



}
