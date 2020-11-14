<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HouseController extends Controller
{

    public function add_costumer(Request $request)
    {
        return view('house.add_costumer', compact('costumer'));
    }

    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->user_id = $request->user()->id;

        $post->save();

        return redirect()->route('posts.index');
    }
    
    //
}
