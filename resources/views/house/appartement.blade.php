
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"> Appartement</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



                            <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">Nomenclature</th>
                                <th scope="col">Nom </th>
                                <th scope="col">Compteur electricite</th>
                                <th scope="col">Compteur D'eau</th>
                                <th scope="col">type </th>
                                <th scope="col"> </th>
                                <th scope="col"> </th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                @foreach ($appartements as $appartement)
                                <tr>
                                    <td> {{ $appartement->noma }}</td>
                                    <td> {{ $appartement->nom }}</td>
                                    <td> {{ $appartement->numb_elec }}</td>
                                    <td>{{ $appartement->numb_eau }}</td>
                                   <td> {{ $appartement->type }}</td>

                                   <td>
                                  <p>
                                    <a href="{{route('edit.un_appartement',$appartement)}}" class="btn btn-info btn-sm btn-block text-white">Modifier</a>
                                    </p>
                                  <td>
                                </tr>
                                @endforeach
                          
                            </tbody>
                            </table>

                     
                             <a class="btn btn-lg btn-primary" href="{{route('appartement.form')}}" role="button"> Ajouter un locataire</a>


             </div>
            </div>
        </div>
    </div>
</div>



@endsection

