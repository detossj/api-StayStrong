<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Routine;
use App\Models\RoutineExercise;
use App\Models\Set;
use Carbon\Carbon;

class MonthlyVolumeSeeder extends Seeder
{
    public function run()
    {
        $userId = 2; // Asegúrate que este usuario exista en tu tabla users

        $routineMayo = Routine::create([
            'user_id' => $userId,
            'date' => Carbon::create(2024, 5, 15),
        ]);

        // Crear ejercicio para rutina Mayo
        $routineExerciseMayo = RoutineExercise::create([
            'routine_id' => $routineMayo->id,
            'exercise_id' => 1, // Debe existir en tabla exercises
        ]);

        // Crear sets para rutina Mayo
        Set::insert([
            [
                'routine_exercise_id' => $routineExerciseMayo->id,
                'reps' => 10,
                'weight' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'routine_exercise_id' => $routineExerciseMayo->id,
                'reps' => 8,
                'weight' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Crear rutina en Junio
        $routineJunio = Routine::create([
            'user_id' => $userId,
            'date' => Carbon::create(2024, 6, 10),
        ]);

        // Crear ejercicio para rutina Junio
        $routineExerciseJunio = RoutineExercise::create([
            'routine_id' => $routineJunio->id,
            'exercise_id' => 1,
        ]);

        // Crear sets para rutina Junio
        Set::insert([
            [
                'routine_exercise_id' => $routineExerciseJunio->id,
                'reps' => 12,
                'weight' => 55,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'routine_exercise_id' => $routineExerciseJunio->id,
                'reps' => 10,
                'weight' => 65,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
