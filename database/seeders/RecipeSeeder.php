<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RecipesTableSeeder extends Seeder
{
    public function run(): void
    {
        $recipeData = [
            [
                'title' => 'Pollo con brócoli y quinoa',
                'description' => 'Receta alta en proteínas y baja en carbohidratos, ideal para el fitness.',
                'ingredients' => json_encode([
                    '150g de pechuga de pollo',
                    '1 taza de brócoli',
                    '1/2 taza de quinoa cocida',
                    'Sal y pimienta al gusto',
                    'Aceite de oliva'
                ]),
                'steps' => json_encode([
                    'Cocinar el pollo a la plancha con aceite de oliva.',
                    'Hervir el brócoli por 5 minutos.',
                    'Cocinar la quinoa siguiendo las instrucciones del paquete.',
                    'Mezclar todo y servir caliente.'
                ]),
                'calories' => 450,
            ],
            [
                'title' => 'Ensalada de garbanzos y espinacas',
                'description' => 'Una ensalada ligera, rica en fibra y proteínas vegetales.',
                'ingredients' => json_encode([
                    '1 taza de garbanzos cocidos',
                    '2 tazas de espinacas frescas',
                    '1 tomate picado',
                    '1/4 cebolla morada',
                    'Jugo de limón',
                    'Sal y pimienta al gusto'
                ]),
                'steps' => json_encode([
                    'Mezclar los garbanzos con las espinacas, tomate y cebolla.',
                    'Aliñar con jugo de limón, sal y pimienta.',
                    'Servir fresca.'
                ]),
                'calories' => 300,
            ],
        ];

        $recipes = [];

        foreach ($recipeData as $index => $recipe) {
            $recipes[] = [
                'id' => $index + 1,
                'title' => $recipe['title'],
                'description' => $recipe['description'],
                'ingredients' => $recipe['ingredients'],
                'steps' => $recipe['steps'],
                'calories' => $recipe['calories'],
                'image_path' => 'recipes/' . Str::slug($recipe['title'], '_') . '.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('recipes')->insert($recipes);
    }
}
