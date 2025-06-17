<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
    protected $fillable = [
        'reps',
        'weight',
        'routine_exercise_id'
    ];
}
