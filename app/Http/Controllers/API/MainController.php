<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function getMessage(){
        return response()->json([
            'message' => 'kill me',
        ]);
    }
}
