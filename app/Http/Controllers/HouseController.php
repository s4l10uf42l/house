<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Appartement;
use App\Locataire;
use App\Facture;
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Facture  $factures
     * @return \Illuminate\Http\Response
     */

    public function facture(Request $request)
    {
        $factures = Facture::latest()->get();

        return view('house.facture', compact('factures'));
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
        $appartements = Appartement::latest()->get();
        $locataires = Locataire::latest()->get();

        return View::make('house.form.facture-form')
           ->with(compact('appartements'))
           ->with(compact('locataires'));

        //return view('house.form.facture-form', compact('data'));
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Locataire  $unlocataire
     * @return \Illuminate\Http\Response
     */


     
    public function contract($unlocataire)
    {
        $appartements = Appartement::latest()->get();
        $unlocataire = Locataire::find($unlocataire);
        $unappartement = Appartement::where('noma',$unlocataire->appartement_id)->get()->first();
        $data = [
            'unlocataire'     => $unlocataire,
            'unappartement' => $unappartement,
        ];
        //echo $data['unappartement']->nom ;
        $pdf = PDF::loadView('house.contract', $data );

     //   download PDF file with download method
        return $pdf->download('contract.pdf');


        return view('house.locataire', compact('appartements'));
    }

        /**
     * Display the specified resource.
     *
     * @param  \App\Facture  $facture
     * @return \Illuminate\Http\Response
     */

    public function detail_quittance($facture)
    {
        $unefacture= facture::find($facture);
        $unappartement = Appartement::where('noma',$unefacture->appartement_id)->get()->first();

        return View::make('house.detail_quittance')
           ->with(compact('unappartement'))
           ->with(compact('unefacture'));



        //return view('house.detail_quittance', compact('unefacture'));
    }


    public function quittance($unefacture)
    {
        $unefacture= facture::find($unefacture);

        $unappartement = Appartement::where('noma',$unefacture->appartement_id)->get()->first();
        $data = [
            'unefacture'     => $unefacture,
            'unappartement' => $unappartement,
        ];

        //echo $data['unappartement']->nom ;
        $pdf = PDF::loadView('house.quittance', $data );
     //   download PDF file with download method
        return $pdf->download('quittance.pdf');
        return view('house.detail_quittance', compact('unefacture'));
    }



    public function store_appartement(Request $request)
    {



        $locataire = new Locataire;
        $locataire->prenom = $request->prenom;
        $locataire->nom = $request->nom;
        $locataire->NIN = $request->NIN;
        $locataire->sexe = $request->sexe;
        $locataire->lieudelivre = $request->lieudelivre;
        $locataire->datedelivre = $request->datedelivre;
        $locataire->date_naissance = $request->date_naissance;
        $locataire->lieu_naissance = $request->lieu_naissance;
        $locataire->appartement_id = $request->appartement_id;
        $locataire->profession = $request->profession;
        $locataire->deb_mois = $request->deb_mois;
        $locataire->deb_ans = $request->deb_ans;
        $locataire->fin_mois = $request->fin_mois;
        $locataire->fin_ans = $request->fin_ans;
        $locataire->contact = $request->contact;

        $locataire->save();

        return redirect()->route('house.locataire');
        
    }


    public function store_facture(Request $request)
    {
        $facture = new Facture;
        $facture->type = $request->type;
        $facture->locataire_name = $request->locataire_name;
        $facture->appartement_id = $request->appartement_id;
        $facture->deb_mois = $request->deb_mois;
        $facture->fin_mois = $request->fin_mois;

        $facture->save();
        $factures = Facture::latest()->get();
        return view('house.facture', compact('factures'));
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
  
        $unappartement = Appartement::where('noma',$unlocataire->appartement_id)->get()->first();

           return View::make('house.detail')
           ->with(compact('unlocataire'))
           ->with(compact('unappartement'));
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
