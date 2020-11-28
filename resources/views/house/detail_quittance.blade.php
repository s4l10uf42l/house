@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
            
                <div class="card-header">Facturation</div>

                <h1 style="text-align: justify;"><br /><br /></h1>
                <h1 style="text-align: center;"><strong>QUITTANCE DE LOYER&nbsp;</strong></h1>
                <p style="text-align: justify;"><br /><br /><br /></p>
                <p>Quittance de loyer du mois :<strong> {{  Carbon\Carbon::parse($unefacture->deb_mois)->translatedFormat('F Y ') }} </strong></p>
                
                <h4><strong>Adresse de location :</strong></h4>
               
                <p><br /></p>
 
                <p>Je soussign&eacute; Mr El hadji Fallou NDIAYE  propri&eacute;taire du logement d&eacute;sign&eacute; ci-dessus, d&eacute;clare avoir re&ccedil;u de {{$unefacture->locataire_name}}  la somme de {{$unappartement->prix_l}}  (en toutes lettres), {{$unappartement->prix}} (en chiffres), au titre du paiement du loyer  pour la p&eacute;riode de location du  {{  Carbon\Carbon::parse($unefacture->deb_mois)->translatedFormat('d F Y')   }}   au {{  Carbon\Carbon::parse($unefacture->fin_mois)->translatedFormat('d F Y ')   }} et lui en donne quittance pour servir et valoir ce que de droit.</p>

                <p><br /></p>
                <h4><strong>D&eacute;tail du r&egrave;glement :</strong></h4>
                <p>Loyer : {{$unappartement->prix}} &nbsp;</p>
                <!-- <p>Provision pour charges : 0 Fr&nbsp;</p> -->
                <p>Total : {{$unappartement->prix}} </p>
                <p>Date du paiement : le  {{Carbon\Carbon::now()->translatedFormat('d F Y à H\hi') }} &nbsp;</h4>
           
                <p>Fait &agrave; DAKAR le {{Carbon\Carbon::now()->translatedFormat('d F Y à H\hi') }}</p>
                <p>Signature</p>
                <p><br /><br /></p>
                <p><em>Cette quittance annule tous les re&ccedil;us qui auraient pu &ecirc;tre &eacute;tablis pr&eacute;c&eacute;demment en cas de paiement partiel du montant du pr&eacute;sent terme. Elle est &agrave; conserver pendant trois ans par le locataire (article 7-1 de la loi n&deg; 89-462 du 6 juillet 1989).&nbsp;</em></p>


             </div>
             <div class="d-flex justify-content-end mb-4">
                <a class="btn btn-primary" href="{{route('house.quittance',$unefacture) }}" >Exporter quittance</a>
             </div>
            </div>

          </div>
        </div>  
  </div>
        

@endsection






