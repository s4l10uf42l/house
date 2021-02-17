<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Appartement;
use App\Locataire;
use App\Facture;
use App\Maintenance;
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

    public function edit_appartement(Appartement $appartement )
    {
        return View::make('house.form.un_appartement-edit')
        ->with(compact('appartement'));
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
        $maintenances = Maintenance::latest()->get();
        return view('house.maintenance', compact('maintenances'));
    }


    public function historique(Request $request)
    {

        // $locataires = Locataire::withTrashed()->get();
         $locataires = Locataire::onlyTrashed()->get();
         $factures = Facture::onlyTrashed()->get();
         $maintenances = Maintenance::onlyTrashed()->get();

        // $historique = Locataire::latest()->get();
                // ->where('account_id', 1)
        // $locataires->restore();
  
        // var_dump($historique);
        // return view('house.historique', compact('locataires'));

        return View::make('house.historique')
        ->with(compact('maintenances'))
        ->with(compact('factures'))
        ->with(compact('locataires'));
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
        $appartements = Appartement::latest()->get();
        $locataires = Locataire::latest()->get();

        return View::make('house.form.maintenance-form')
        ->with(compact('appartements'))
        ->with(compact('locataires'));

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


     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appartement  $appartement
     * @return \Illuminate\Http\Response
     */



    public function update_un_appartement( Request $request, Appartement $appartement)
    {
        $appartement->noma = $request->noma;
        $appartement->nom = $request->nom;
        $appartement->numb_elec = $request->numb_elec;
        $appartement->numb_eau = $request->numb_eau;
        $appartement->type = $request->type;
        $appartement->prix = $request->prix;
        $appartement->prix_l = $request->prix_l;
        $appartement->piece = $request->piece;
        $appartement->save();
        return redirect()->route('house.locataire');
        
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
        $name=explode(" ", $request->locataire_name);
        // var_dump($name);
        $facture = new Facture;
        $facture->type = $request->type;
        $facture->locataire_name = $name[0]." ".$name[1];
        // $locataire_id = Locataire::where('appartement_id', $request->appartement_id)->get();
        // var_dump($locataire_id);
        $facture->appartement_id = $request->appartement_id;
        $facture->locataire_id = $name[2];
        $facture->deb_mois = $request->deb_mois;
        $facture->fin_mois = $request->fin_mois;
        $facture->save();
        $factures = Facture::latest()->get();
        return view('house.facture', compact('factures'));
    //  

    }


    public function store_maintenance(Request $request)
    {   
        
        $name=explode(" ", $request->locataire_name);

        $maintenance = new Maintenance;
        $maintenance->type = $request->type;
        $maintenance->locataire_name = $name[0]." ".$name[1];
        $maintenance->appartement_id = $request->appartement_id;
        $maintenance->locataire_id = $name[2];
        $maintenance->honoraire = $request->honoraire;
        $maintenance->materiel = $request->materiel;
        $maintenance->save();
        $maintenances = Maintenance::latest()->get();
        return view('house.maintenance', compact('maintenances'));
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




    public function edit_locataire(Locataire $locataire)
    {
        //return view('house.form.locataire-edit', compact('locataire'));

        $appartements = Appartement::latest()->get();
        // $locataires = Locataire::latest()->get();

        return View::make('house.form.locataire-edit')
        ->with(compact('appartements'))
        ->with(compact('locataire'));
    }


  /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Locataire  $locataire
     * @return \Illuminate\Http\Response
     */

    public function update_locataire(Request $request, Locataire $locataire)
    {
  
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

       $locataires = locataire::latest()->get();
        return view('house.locataire', compact('locataires'));
            }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Locataire  $locataire
     * @return \Illuminate\Http\Response
     */

       public function destroy_locataire(Locataire $locataire)
        {

            $factures = Facture::where('locataire_id', $locataire->id )->get();
            $maintenances= Maintenance::where('locataire_id', $locataire->id )->get();
            

            foreach ($factures as $facture) {
                // code
                $facture->delete();
                }
                
            foreach ($maintenances as $maintenance) {
                // code
                $maintenance->delete();
                }    
            $locataire->delete();

       $locataires = locataire::latest()->get();
        return view('house.locataire', compact('locataires'));
       }
         

       public function edit_facture(Facture $facture)
       {

            $appartements = Appartement::latest()->get();
            $locataires = Locataire::latest()->get();
    
            return View::make('house.form.facture-edit')
               ->with(compact('appartements'))
               ->with(compact('facture'))
               ->with(compact('locataires'));
       }

    //


      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Facture  $facture
     * @return \Illuminate\Http\Response
     */

    public function  update_facture(Request $request,Facture  $facture )
    {
   
        $facture->type = $request->type;
        $facture->locataire_name = $request->locataire_name;
        $facture->appartement_id = $request->appartement_id;
        $facture->locataire_id = $request->locataire_id;
        $facture->deb_mois = $request->deb_mois;
        $facture->fin_mois = $request->fin_mois;

        $facture->save();
        $factures = Facture::latest()->get();
        return view('house.facture', compact('factures'));
    }
   


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Facture  $facture
     * @return \Illuminate\Http\Response
     */

    public function destroy_facture(Facture $facture)
    {
        $facture->delete();
        $factures = Facture::latest()->get();
        return view('house.facture', compact('factures'));
   }


     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Maintenance  $unemaintenance
     * @return \Illuminate\Http\Response
     */



   public function edit_maintenance(Maintenance $maintenance)
       {

            $appartements = Appartement::latest()->get();
            $locataires = Locataire::latest()->get();

            return View::make('house.form.maintenance-edit')
               ->with(compact('appartements'))
               ->with(compact('maintenance'))
               ->with(compact('locataires'));
       }

    //


      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */

    public function  update_maintenance(Request $request,Maintenance  $maintenance )
    {
   
        $maintenance->type = $request->type;
        $maintenance->locataire_name = $request->locataire_name;
        $maintenance->appartement_id = $request->appartement_id;
        $maintenance->honoraire = $request->honoraire;
        $maintenance->materiel = $request->materiel;

        $maintenance->save();
        $maintenances = Maintenance::latest()->get();
        return view('house.maintenance', compact('maintenances'));
    }
   


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */

    public function destroy_maintenance(Maintenance $maintenance)
    {
        $maintenance->delete();
        $maintenances = Maintenance::latest()->get();
        return view('house.maintenance', compact('maintenances'));
   }
}
