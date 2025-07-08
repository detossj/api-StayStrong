<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Routine extends Model
{
    protected $fillable = [
        'user_id',
        'date',
        'type',
    ];

    public function user() {

        return $this->belongsTo(User::class);
    }

    public function routineExercises() {

        return $this->hasMany(RoutineExercise::class);
    }
}
