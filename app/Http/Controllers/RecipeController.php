<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{

    public function index()
    {
      
        return response()->json(Recipe::all(), 200);

    }
 

    public function show($id)
    {
        $recipe = Recipe::find($id);

        if (!$recipe) {
            return response()->json(['message' => 'Receta no encontrada'], 404);
        }

        return response()->json($recipe, 200);
    }
}
