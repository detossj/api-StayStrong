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
            ['Abdominales en polea', 'Abdomen', 'Abdomen'],
            ['Abdominales', 'Abdomen', 'Abdomen'],
            ['Aductor en Máquina', 'Aductores', 'Piernas'],
            ['Aperturas con mancuernas', 'Pectorales', 'Pecho'],
            ['Aperturas con Máquina', 'Pectorales', 'Pecho'],
            ['Biceps con barra Z', 'Bíceps braquial', 'Brazos'],
            ['Cruce de poleas alto', 'Pectorales (porción inferior)', 'Pecho'],
            ['Cruce de poleas', 'Pectorales', 'Pecho'],
            ['Curl de bíceps alternado', 'Bíceps braquial', 'Brazos'],
            ['Curl de bíceps con barra', 'Bíceps braquial', 'Brazos'],
            ['Curl de Bíceps concentrado', 'Bíceps braquial', 'Brazos'],
            ['Curl de Bíceps Inclinado con Mancuernas', 'Bíceps braquial', 'Brazos'],
            ['Curl de bíceps polea baja', 'Bíceps braquial', 'Brazos'],
            ['Curl de bíceps', 'Bíceps braquial', 'Brazos'],
            ['Curl Femoral Tumbado en Máquina', 'Isquiotibiales', 'Piernas'],
            ['Curl femoral', 'Isquiotibiales', 'Piernas'],
            ['Curl martillo', 'Bíceps braquial, Braquiorradial', 'Brazos'],
            ['Curl predicador', 'Bíceps braquial', 'Brazos'],
            ['Dominadas', 'Dorsales, Bíceps', 'Espalda'],
            ['Elevación de Gemelos en Máquina Hack', 'Gemelos', 'Piernas'],
            ['Elevación de Gemelos en Máquina', 'Gemelos', 'Piernas'],
            ['Elevación de Gemelos en Prensa', 'Gemelos', 'Piernas'],
            ['Elevación de Gemelos', 'Gemelos', 'Piernas'],
            ['Elevación de piernas colgado', 'Abdomen inferior, Flexores de cadera', 'Abdomen'],
            ['Encogimiento de Hombros con Barra', 'Trapecios', 'Hombros'],
            ['Extensión de Cadera de Pie', 'Glúteos, Isquiotibiales', 'Piernas'],
            ['Extensión de Cadera', 'Glúteos, Isquiotibiales', 'Piernas'],
            ['Extensión de Piernas', 'Cuádriceps', 'Piernas'],
            ['Extensión de tríceps acostado con barra', 'Tríceps', 'Brazos'],
            ['Extensión de Tríceps con Mancuerna', 'Tríceps', 'Brazos'],
            ['Extensión de tríceps tras nuca', 'Tríceps', 'Brazos'],
            ['Face Pull', 'Deltoides posteriores, Trapecios', 'Hombros'],
            ['Flexiones de brazos', 'Pectorales, Tríceps, Deltoides', 'Pecho'],
            ['Fondos con lastre', 'Tríceps, Pectorales', 'Brazos'],
            ['Fondos de tríceps en banco', 'Tríceps', 'Brazos'],
            ['Fondos de Tríceps en máquina', 'Tríceps', 'Brazos'],
            ['Fondos en máquina', 'Tríceps, Pectorales', 'Brazos'],
            ['Fondos', 'Tríceps, Pectorales', 'Brazos'],
            ['Gemelos sentado en Máquina', 'Sóleo (gemelos)', 'Piernas'],
            ['Jalón al pecho agarre neutro', 'Dorsales, Bíceps', 'Espalda'],
            ['Jalón al pecho agarre prono', 'Dorsales, Bíceps', 'Espalda'],
            ['Jalón al pecho agarre supino', 'Dorsales, Bíceps', 'Espalda'],
            ['Patada de glúteos en máquina', 'Glúteos', 'Piernas'],
            ['Patada de glúteos en polea', 'Glúteos', 'Piernas'],
            ['Patada de tríceps con mancuerna', 'Tríceps', 'Brazos'],
            ['Peso Muerto con Máquina', 'Espalda baja, Glúteos, Isquiotibiales', 'Espalda'],
            ['Peso Muerto Rumano Máquina Smith', 'Isquiotibiales', 'Piernas'],
            ['Peso Muerto Rumano', 'Isquiotibiales, Glúteos', 'Piernas'],
            ['Prensa inclinada', 'Cuádriceps, Glúteos, Isquiotibiales', 'Piernas'],
            ['Press Banca con mancuernas', 'Pectorales, Tríceps, Deltoides anteriores', 'Pecho'],
            ['Press de Banca Declinado con Barra', 'Pectorales inferiores, Tríceps', 'Pecho'],
            ['Press de Banca Declinado con mancuernas', 'Pectorales inferiores, Tríceps', 'Pecho'],
            ['Press de Banca Inclinado con Barra', 'Pectorales superiores', 'Pecho'],
            ['Press de Pecho en Máquina', 'Pectorales, Tríceps', 'Pecho'],
            ['Press de Tríceps en Polea Alta', 'Tríceps', 'Brazos'],
            ['Press militar con mancuernas', 'Deltoides, Tríceps', 'Hombros'],
            ['Press militar en máquina', 'Deltoides, Tríceps', 'Hombros'],
            ['Press Militar Sentado con Barra', 'Deltoides, Tríceps', 'Hombros'],
            ['Pullover', 'Dorsales, Pectorales', 'Espalda'],
            ['Remo con Barra en T', 'Dorsales, Romboides, Bíceps', 'Espalda'],
            ['Remo con barra inclinado', 'Dorsales, Romboides, Bíceps', 'Espalda'],
            ['Remo con barra', 'Dorsales, Romboides, Bíceps', 'Espalda'],
            ['Remo horizontal', 'Dorsales, Romboides, Bíceps', 'Espalda'],
            ['Remo Sentado en Polea', 'Dorsales, Bíceps', 'Espalda'],
            ['Remo unilateral con mancuerna', 'Dorsales, Romboides, Bíceps', 'Espalda'],
            ['Sentadilla Búlgara con mancuerna', 'Glúteos, Cuádriceps, Isquiotibiales', 'Piernas'],
            ['Sentadilla con mancuerna', 'Cuádriceps, Glúteos', 'Piernas'],
            ['Sentadilla en Máquina Smith', 'Cuádriceps, Glúteos', 'Piernas'],
            ['Sentadilla Hack', 'Cuádriceps, Glúteos', 'Piernas'],
            ['Sentadilla libre con barra', 'Cuádriceps, Glúteos, Core', 'Piernas'],
            ['Vuelos Frontales', 'Deltoides anteriores', 'Hombros'],
            ['Vuelos Invertidos con Mancuernas', 'Deltoides posteriores', 'Hombros'],
            ['Vuelos laterales con mancuernas', 'Deltoides laterales', 'Hombros'],
            ['Vuelos laterales con polea', 'Deltoides laterales', 'Hombros'],
            ['Zancadas con barra', 'Cuádriceps, Glúteos, Isquiotibiales', 'Piernas'],
            ['Zancadas', 'Cuádriceps, Glúteos, Isquiotibiales', 'Piernas'],
        ];

        $exercises = [];

        foreach ($exerciseData as $index => [$name, $muscles, $category]) {
            $exercises[] = [
                'id' => $index + 1,
                'name' => $name,
                'description' => $muscles,
                'image_path' => 'imagenes/' . Str::slug($name, '_') . '.webp',
                'category' => $category,
            ];
        }

        DB::table('exercises')->insert($exercises);
    }
}
