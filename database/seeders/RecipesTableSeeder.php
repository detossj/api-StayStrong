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
                'ingredients' => implode("\n", [
                    '150g de pechuga de pollo',
                    '1 taza de brócoli',
                    '1/2 taza de quinoa cocida',
                    'Sal y pimienta al gusto',
                    'Aceite de oliva'
                ]),
                'steps' => implode("\n", [
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
                'ingredients' => implode("\n", [
                    '1 taza de garbanzos cocidos',
                    '2 tazas de espinacas frescas',
                    '1 tomate picado',
                    '1/4 cebolla morada',
                    'Jugo de limón',
                    'Sal y pimienta al gusto'
                ]),
                'steps' => implode("\n", [
                    'Mezclar los garbanzos con las espinacas, tomate y cebolla.',
                    'Aliñar con jugo de limón, sal y pimienta.',
                    'Servir fresca.'
                ]),
                'calories' => 300,
            ],
            [
                'title' => 'Tacos de pescado al estilo Baja',
                'description' => 'Tacos frescos y ligeros con pescado empanizado y salsa de col.',
                'ingredients' => implode("\n", [
                    '200g de filete de pescado blanco',
                    '1 taza de col rallada',
                    '4 tortillas de maíz',
                    'Jugo de lima',
                    'Mayonesa ligera',
                    'Especias para pescado (comino, paprika, ajo en polvo)',
                    'Sal y pimienta'
                ]),
                'steps' => implode("\n", [
                    'Condimentar el pescado con las especias, sal y pimienta.',
                    'Empanizar y freír ligeramente o cocinar a la plancha.',
                    'Preparar la salsa mezclando mayonesa con jugo de lima.',
                    'Armar los tacos con pescado, col y la salsa.',
                    'Servir con rodajas de lima.'
                ]),
                'calories' => 420,
            ],
            [
                'title' => 'Sopa cremosa de calabaza',
                'description' => 'Una sopa suave y nutritiva perfecta para días fríos.',
                'ingredients' => implode("\n", [
                    '500g de calabaza pelada y picada',
                    '1 cebolla picada',
                    '2 dientes de ajo',
                    '500ml de caldo de verduras',
                    '100ml de crema ligera',
                    'Aceite de oliva',
                    'Sal y pimienta'
                ]),
                'steps' => implode("\n", [
                    'Sofreír cebolla y ajo en aceite hasta transparentes.',
                    'Agregar la calabaza y caldo, cocinar hasta que esté blanda.',
                    'Licuar la mezcla hasta obtener una crema homogénea.',
                    'Incorporar la crema ligera, salpimentar y calentar sin hervir.',
                    'Servir caliente.'
                ]),
                'calories' => 350,
            ],
            [
                'title' => 'Ensalada mediterránea de quinoa',
                'description' => 'Una ensalada fresca con ingredientes mediterráneos y quinoa.',
                'ingredients' => implode("\n", [
                    '1 taza de quinoa cocida',
                    '10 tomates cherry cortados a la mitad',
                    '1 pepino picado',
                    '100g de queso feta desmenuzado',
                    'Aceitunas negras',
                    'Jugo de limón',
                    'Aceite de oliva',
                    'Orégano, sal y pimienta'
                ]),
                'steps' => implode("\n", [
                    'Mezclar la quinoa con tomates, pepino, aceitunas y queso feta.',
                    'Aliñar con jugo de limón, aceite de oliva, orégano, sal y pimienta.',
                    'Refrigerar por 30 minutos antes de servir.'
                ]),
                'calories' => 380,
            ],
            [
                'title' => 'Batido energético de plátano y avena',
                'description' => 'Batido ideal para antes o después del entrenamiento.',
                'ingredients' => implode("\n", [
                    '1 plátano maduro',
                    '2 cucharadas de avena',
                    '250ml de leche (puede ser vegetal)',
                    '1 cucharadita de miel',
                    'Canela al gusto'
                ]),
                'steps' => implode("\n", [
                    'Colocar todos los ingredientes en la licuadora.',
                    'Procesar hasta obtener una mezcla homogénea.',
                    'Servir frío.'
                ]),
                'calories' => 290,
            ],
            [
                'title' => 'Pasta integral con espinaca y pollo',
                'description' => 'Pasta saludable con proteína magra y vegetales.',
                'ingredients' => implode("\n", [
                    '100g de pasta integral',
                    '150g de pechuga de pollo en cubos',
                    '1 taza de espinaca fresca',
                    '1 diente de ajo picado',
                    'Aceite de oliva',
                    'Sal y pimienta'
                ]),
                'steps' => implode("\n", [
                    'Cocinar la pasta según las instrucciones.',
                    'Saltear el pollo con ajo en aceite de oliva.',
                    'Agregar la espinaca y cocinar hasta que se marchite.',
                    'Mezclar con la pasta y servir caliente.'
                ]),
                'calories' => 480,
            ],
            [
                'title' => 'Avena nocturna con frutos rojos',
                'description' => 'Desayuno rápido, nutritivo y listo al despertar.',
                'ingredients' => implode("\n", [
                    '1/2 taza de avena',
                    '1/2 taza de leche o bebida vegetal',
                    '1/2 taza de frutos rojos',
                    '1 cucharadita de miel',
                    '1 cucharadita de chía'
                ]),
                'steps' => implode("\n", [
                    'Mezclar todos los ingredientes en un frasco.',
                    'Refrigerar toda la noche.',
                    'Servir frío o a temperatura ambiente.'
                ]),
                'calories' => 310,
            ],
            [
                'title' => 'Wok de vegetales y tofu',
                'description' => 'Opción vegana rica en proteínas vegetales y fibra.',
                'ingredients' => implode("\n", [
                    '200g de tofu firme en cubos',
                    '1 taza de brócoli',
                    '1 zanahoria en tiras',
                    '1 pimentón en tiras',
                    '2 cucharadas de salsa de soya',
                    'Aceite de sésamo',
                    'Ajo y jengibre picados'
                ]),
                'steps' => implode("\n", [
                    'Saltear tofu hasta dorar.',
                    'Agregar vegetales, ajo y jengibre.',
                    'Incorporar salsa de soya y cocinar 5 minutos.',
                    'Servir caliente.'
                ]),
                'calories' => 360,
            ],
            [
                'title' => 'Panqueques de avena y plátano',
                'description' => 'Panqueques saludables sin azúcar refinada.',
                'ingredients' => implode("\n", [
                    '1 plátano maduro',
                    '2 huevos',
                    '1/2 taza de avena molida',
                    '1/2 cucharadita de polvo de hornear',
                    'Canela al gusto'
                ]),
                'steps' => implode("\n", [
                    'Triturar el plátano y mezclar con los huevos.',
                    'Añadir avena, polvo de hornear y canela.',
                    'Cocinar en sartén antiadherente por ambos lados.',
                    'Servir con fruta o miel.'
                ]),
                'calories' => 330,
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
                'image_path' => 'recipes/' . Str::slug($recipe['title'], '_') . '.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('recipes')->insert($recipes);
    }
}
