<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appartement;
use App\Locataire;
use PDF;
class HouseController extends Controller
{



    /**
     * Display the specified resource.
     *
     * @param  \App\Appartement  $appartement
     * @return \Illuminate\Http\Response
     */

    public function appartement( Request $request)
    {
        $appartements = Appartement::latest()->get();
        return view('house.appartement', compact('appartements'));
        
    }

    public function locataire( Request $request)
    {
        $locataires = locataire::latest()->get();
        return view('house.locataire', compact('locataires'));
        
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
        $appartements = Appartement::latest()->get();
        return view('house.form.appartement-form', compact('appartements'));
    }

    public function contract(Request $request)
    {
        $appartements = Appartement::latest()->get();

        $pdf = PDF::loadView('house.contract', $appartements);

        // download PDF file with download method
        return $pdf->download('contract.pdf');


        // return view('house.contract', compact('appartements'));
    }

    

    public function store_appartement(Request $request)
    {

        $locataire = new Locataire;
        $locataire->prenom = $request->prenom;
        $locataire->nom = $request->nom;
        $locataire->NIN = $request->NIN;
        $locataire->date_naissance = $request->date_naissance;
        $locataire->lieu_naissance = $request->lieu_naissance;
        $locataire->appartement_id = $request->appartement_id;
        $locataire->profession = $request->profession;
        $locataire->contact = $request->contact;

        $locataire->save();

        return redirect()->route('house.locataire');
        
    }


    public function store_facture(Request $request)
    {
        return view('house.facture', compact('facture'));
    }


    public function store_maintenance(Request $request)
    {
        return view('house.maintenance', compact('maintenance'));
    }



      /**
     * Display the specified resource.
     *
     * @param  \App\Locataire  $locataire
     * @return \Illuminate\Http\Response
     */



    public function detail($locataire)
    {
        $unlocataire = Locataire::find($locataire);

        return view('house.detail', compact('unlocataire'));
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
