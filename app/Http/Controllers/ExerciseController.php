<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exercise;

class ExerciseController extends Controller
{
     /**
     * Lista todos los ejercicios disponibles
     * 
     * @authenticated
     * @header Authorization Bearer {token}
     */
    public function index(Request $request)
    {
        $exercises = Exercise::all();

        return response()->json($exercises);
    }
}
