<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return response()->json(Post::all());
    }

    public function store(Request $request){
        $validated = $request->validate([
            'image' => 'required',
            'description' => 'required',
            'likes' => 'required|integer'
        ]);
        $post = Post::create($validated);
        return response()->json($post);
    }

    public function update(Request $request, $id){
        dd($request);
    }

    public function destroy(Request $request){
        dd( $request );
    }
}
