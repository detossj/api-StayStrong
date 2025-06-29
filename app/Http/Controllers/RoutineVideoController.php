<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoutineVideo;

class RoutineVideoController extends Controller
{
    public function random(Request $request)
    {
        $limit = $request->get('limit', 3);
        $videos = RoutineVideo::inRandomOrder()->limit($limit)->get();

        return response()->json($videos);
    }
}
