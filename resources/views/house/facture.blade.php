@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <a class="btn btn-lg btn-primary" href="{{route('facture.form')}}" role="button"> Générer une facture </a>

            <div class="card">
            
                <div class="card-header">Facturation</div>

                            <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">Appartement</th>
                                <th scope="col">Locataire </th>
                                <th scope="col">Type</th>
                                <th scope="col">Periode</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                @foreach ($factures as $facture)
                                <tr>
                                    <td> {{ $facture->appartement_id }}</td>
                                    <td> {{ $facture->locataire_name }}</td>
                                    <td> {{ $facture->type }}</td>
                                    <td>{{ $facture->deb_mois}} au {{ $facture->fin_mois}}</td>
                                    <td>  <a href="{{route('house.detail_quittance' ,$facture)}}"  class="btn btn-success btn-sm btn-block text-white"> Voir la quittance </a>   </td>
                                   <!-- <td> <a href="{{route('edit.facture',$facture)}}" class="btn btn-info btn-sm btn-block text-white">Modication</a> </td> -->
                                   <td>
                                  <p>
                                    <a href="{{route('edit.facture',$facture)}}" class="btn btn-info btn-sm btn-block text-white">Modifier</a>
                                        <span>
                                            <form action="{{route('destroy.facture', $facture)}}" method="POST">
                                                @csrf @method('DELETE')
                                                <button class="btn btn-danger btn-sm btn-block"
                                                onclick="return confirm('You can not recover deleted posts. Are you sure you want to delete this post?');">Supprimer</button>
                                                </form>
                                        </span>
                                    </p>
                                  <td>

                                </tr>
                                @endforeach
                          
                            </tbody>
                            </table>


             </div>

            </div>


              </div>
        </div>  
  </div>
        

@endsection
