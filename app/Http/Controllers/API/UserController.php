<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        return User::where('rating', '>', 4)->get();
    }

    public function store(Request $request){
        $vad = $request->validate([
            'name'=> 'string',
            'email'=> 'email',
            'password'=> 'string',
            'rating'=> 'integer|max:8',
        ]);
        $user = User::create($vad);
        return response()->json($user);
    }
}
