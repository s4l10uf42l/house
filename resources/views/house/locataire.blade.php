
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">


            <div class="card">
                <div class="card-header"> Locataire</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



                            <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">Prenom</th>
                                <th scope="col">Nom </th>
                                <th scope="col">Telephone</th>
                                <th scope="col">Appartement</th>
                                <th scope="col"> profession </th>
                                <th scope="col"> profession </th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                @foreach ($locataires as $locataire)
                                
                                <tr>
                                    <td> {{ $locataire->prenom }}</td>
                                    <td> {{ $locataire->nom }}</td>
                                    <td> {{ $locataire->contact }}</td>
                                    <td>{{ $locataire-> appartement_id}}</td>
                                   <td> {{ $locataire->profession }}</td>
                                   <td>  <a href="{{route('house.detail' ,$locataire)}}" > Plus de details </a>   </td>
                                </tr>
                                @endforeach
                          
                            </tbody>
                            </table>

                     
                                            <!-- Large modal -->
 
  <!-- 
        <a class="btn btn-lg btn-primary" href="{{route('appartement.form')}}" role="button"> Ajouter un locataire</a>

        <a class="btn btn-lg btn-primary" href="{{route('house.contract')}}" role="button"> Ajouter un locataire</a> -->

             </div>
            </div>
        </div>
    </div>
</div>






@endsection

