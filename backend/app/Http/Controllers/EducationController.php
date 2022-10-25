<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function getAllEducation()
    {
        $education = Education::all();

        return response()->json([
            'status' => 'success',
            'data' => $education,
        ]);
    }

    public function getEducation($slug)
    {
        $education = Education::where('slug', $slug)->first();

        return response()->json([
            'status' => 'success',
            'data' => $education,
        ]);
    }

    public function getEducationByType($type)
    {
        $education = Education::where('type', $type)->get();

        return response()->json([
            'status' => 'success',
            'data' => $education,
        ]);
    }
}
