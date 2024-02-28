<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kurss;

class KurssController extends Controller
{
    public function index(Request $request){
        return Kurss::all();
    }

    public function store(Request $request){
        $vad = $request->validate([
            "name"=> "required|string|unique:kurss",
            "about"=> "required|string|max:255",
            "banera"=> "required|string|max:255",
            "people_count"=> "required|integer|max:10",
        ]);
        $kurss = Kurss::create($vad);
        return response()->json($kurss);
    }
}

