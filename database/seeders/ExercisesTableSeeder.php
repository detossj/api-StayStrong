<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ExercisesTableSeeder extends Seeder
{
    public function run(): void
    {
        $exerciseData = [
            ['Abdominales en polea', 'Abdomen'],
            ['Abdominales', 'Abdomen'],
            ['Aductor en Máquina', 'Aductores'],
            ['Aperturas con mancuernas', 'Pectorales'],
            ['Aperturas con Máquina', 'Pectorales'],
            ['Biceps con barra Z', 'Bíceps braquial'],
            ['Bici', 'Piernas, Cardiovascular'],
            ['Cinta', 'Piernas, Cardiovascular'],
            ['Cruce de poleas alto', 'Pectorales (porción inferior)'],
            ['Cruce de poleas', 'Pectorales'],
            ['Curl de bíceps alternado', 'Bíceps braquial'],
            ['Curl de bíceps con barra', 'Bíceps braquial'],
            ['Curl de Bíceps concentrado', 'Bíceps braquial'],
            ['Curl de Bíceps Inclinado con Mancuernas', 'Bíceps braquial'],
            ['Curl de bíceps polea baja', 'Bíceps braquial'],
            ['Curl de bíceps', 'Bíceps braquial'],
            ['Curl Femoral Tumbado en Máquina', 'Isquiotibiales'],
            ['Curl femoral', 'Isquiotibiales'],
            ['Curl martillo', 'Bíceps braquial, Braquiorradial'],
            ['Curl predicador', 'Bíceps braquial'],
            ['Dominadas', 'Dorsales, Bíceps'],
            ['Elevación de Gemelos en Máquina Hack', 'Gemelos'],
            ['Elevación de Gemelos en Máquina', 'Gemelos'],
            ['Elevación de Gemelos en Prensa', 'Gemelos'],
            ['Elevación de Gemelos', 'Gemelos'],
            ['Elevación de piernas colgado', 'Abdomen inferior, Flexores de cadera'],
            ['Elíptica', 'Piernas, Cardiovascular'],
            ['Encogimiento de Hombros con Barra', 'Trapecios'],
            ['Extensión de Cadera de Pie', 'Glúteos, Isquiotibiales'],
            ['Extensión de Cadera', 'Glúteos, Isquiotibiales'],
            ['Extensión de Piernas', 'Cuádriceps'],
            ['Extensión de tríceps acostado con barra', 'Tríceps'],
            ['Extensión de Tríceps con Mancuerna', 'Tríceps'],
            ['Extensión de tríceps tras nuca', 'Tríceps'],
            ['Face Pull', 'Deltoides posteriores, Trapecios, Romboides'],
            ['Flexiones de brazos', 'Pectorales, Tríceps, Deltoides'],
            ['Fondos con lastre', 'Tríceps, Pectorales'],
            ['Fondos de tríceps en banco', 'Tríceps'],
            ['Fondos de Tríceps en máquina', 'Tríceps'],
            ['Fondos en máquina', 'Tríceps, Pectorales'],
            ['Fondos', 'Tríceps, Pectorales'],
            ['Gemelos sentado en Máquina', 'Sóleo (gemelos)'],
            ['Jalón al pecho agarre neutro', 'Dorsales, Bíceps'],
            ['Jalón al pecho agarre prono', 'Dorsales, Bíceps'],
            ['Jalón al pecho agarre supino', 'Dorsales, Bíceps'],
            ['Patada de glúteos en máquina', 'Glúteos'],
            ['Patada de glúteos en polea', 'Glúteos'],
            ['Patada de tríceps con mancuerna', 'Tríceps'],
            ['Peso Muerto con Máquina', 'Espalda baja, Glúteos, Isquiotibiales'],
            ['Peso Muerto Rumano Máquina Smith', 'Isquiotibiales, Glúteos'],
            ['Peso Muerto Rumano', 'Isquiotibiales, Glúteos'],
            ['Prensa inclinada', 'Cuádriceps, Glúteos, Isquiotibiales'],
            ['Press Banca con mancuernas', 'Pectorales, Tríceps, Deltoides anteriores'],
            ['Press de Banca Declinado con Barra', 'Pectorales inferiores, Tríceps'],
            ['Press de Banca Declinado con mancuernas', 'Pectorales inferiores, Tríceps'],
            ['Press de Banca Inclinado con Barra', 'Pectorales superiores, Deltoides anteriores'],
            ['Press de Pecho en Máquina', 'Pectorales, Tríceps'],
            ['Press de Tríceps en Polea Alta', 'Tríceps'],
            ['Press militar con mancuernas', 'Deltoides, Tríceps'],
            ['Press militar en máquina', 'Deltoides, Tríceps'],
            ['Press Militar Sentado con Barra', 'Deltoides, Tríceps'],
            ['Pullover', 'Dorsales, Pectorales'],
            ['Remo con Barra en T', 'Dorsales, Romboides, Bíceps'],
            ['Remo con barra inclinado', 'Dorsales, Romboides, Bíceps'],
            ['Remo con barra', 'Dorsales, Romboides, Bíceps'],
            ['Remo horizontal', 'Dorsales, Romboides, Bíceps'],
            ['Remo Sentado en Polea', 'Dorsales, Romboides, Bíceps'],
            ['Remo unilateral con mancuerna', 'Dorsales, Romboides, Bíceps'],
            ['Sentadilla Búlgara con mancuerna', 'Glúteos, Cuádriceps, Isquiotibiales'],
            ['Sentadilla con mancuerna', 'Cuádriceps, Glúteos'],
            ['Sentadilla en Máquina Smith', 'Cuádriceps, Glúteos'],
            ['Sentadilla Hack', 'Cuádriceps, Glúteos'],
            ['Sentadilla libre con barra', 'Cuádriceps, Glúteos, Core'],
            ['Vuelos Frontales', 'Deltoides anteriores'],
            ['Vuelos Invertidos con Mancuernas', 'Deltoides posteriores'],
            ['Vuelos laterales con mancuernas', 'Deltoides laterales'],
            ['Vuelos laterales con polea', 'Deltoides laterales'],
            ['Zancadas con barra', 'Cuádriceps, Glúteos, Isquiotibiales'],
            ['Zancadas', 'Cuádriceps, Glúteos, Isquiotibiales'],
        ];

        $exercises = [];

        foreach ($exerciseData as $index => [$name, $muscles]) {
            $exercises[] = [
                'id' => $index + 1,
                'name' => $name,
                'description' => $muscles,
                'image_path' => 'imagenes/' . Str::slug($name, '_') . '.webp',
            ];
        }

        DB::table('exercises')->insert($exercises);
    }
}
