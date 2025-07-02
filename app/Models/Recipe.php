<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'title',
        'description',
        'ingredients',
        'steps',
        'calories',
        'image_path'
    ];

    public function user() {

        return $this->belongsTo(User::class);
    }
}
