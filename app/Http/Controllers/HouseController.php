<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HouseController extends Controller
{

    public function appartement(Request $request)
    {
        return view('house.appartement', compact('appartement'));
    }


    public function facture(Request $request)
    {
        return view('house.facture', compact('facture'));
    }


    public function maintenance(Request $request)
    {
        return view('house.maintenance', compact('maintenance'));
    }


    public function historique(Request $request)
    {
        return view('house.historique', compact('historique'));
    }




    public function add_facture(Request $request)
    {
        return view('house.form.facture-form', compact('facture'));
    }


    public function add_maintenance(Request $request)
    {
        return view('house.form.maintenance-form', compact('maintenance'));
    }

    public function add_appartement(Request $request)
    {
        return view('house.form.appartement-form', compact('costumer'));
    }

    

    public function store_appartement(Request $request)
    {
        return view('house.appartement', compact('appartement'));
    }


    public function store_facture(Request $request)
    {
        return view('house.facture', compact('facture'));
    }


    public function store_maintenance(Request $request)
    {
        return view('house.maintenance', compact('maintenance'));
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
