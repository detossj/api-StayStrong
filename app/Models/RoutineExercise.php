<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoutineExercise extends Model
{
    protected $fillable = [
        'routine_id',
        'exercise_id',
    ];

    public function routine() {

        return $this->belongsTo(Routine::class);
    }

    public function exercise() {

        return $this->belongsTo(Exercise::class);
    }

    public function sets() {

        return $this->hasMany(Set::class);
    }
}
