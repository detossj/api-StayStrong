<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoutineVideo extends Model
{
    protected $fillable = [
        'title',
        'description',
        'video_url',
        'duration_minutes',
    ];

    public function user() {

        return $this->belongsTo(User::class);
    }
}
