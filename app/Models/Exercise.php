<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image_path',
        'category'
    ];

    public function routineExercises()
    {
        return $this->hasMany(RoutineExercise::class);
    }
}
