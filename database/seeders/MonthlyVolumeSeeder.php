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
        $userId = 2; 

        $routineMayo = Routine::create([
            'user_id' => $userId,
            'date' => Carbon::create(2024, 5, 15),
        ]);


        $routineExerciseMayo = RoutineExercise::create([
            'routine_id' => $routineMayo->id,
            'exercise_id' => 1, 
        ]);

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

 
        $routineJunio = Routine::create([
            'user_id' => $userId,
            'date' => Carbon::create(2024, 6, 10),
        ]);

      
        $routineExerciseJunio = RoutineExercise::create([
            'routine_id' => $routineJunio->id,
            'exercise_id' => 1,
        ]);

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
