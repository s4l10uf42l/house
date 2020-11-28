
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">


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
                                <th scope="col">Contract</th>
                                <th scope="col">Prenom</th>
                                <th scope="col">Nom </th>
                                <th scope="col">Telephone</th>
                                <th scope="col">Appartement</th>
                                <th scope="col"> profession </th>
                                <th scope="col">  </th>
                                <th scope="col">  </th>

                                </tr>
                            </thead>
                            <tbody>
                               
                                @foreach ($locataires as $locataire)
                                
                                <tr>
                                <td>  <a href="{{route('house.detail' ,$locataire)}}" class="btn btn-success btn-sm btn-block text-white" > Contract </a>   </td>
                                    <td> {{ $locataire->prenom }}</td>
                                    <td> {{ $locataire->nom }}</td>
                                    <td> {{ $locataire->contact }}</td>
                                    <td>{{ $locataire-> appartement_id}}</td>
                                   <td> {{ $locataire->profession }}</td>
                                   <!-- <td>  <a href="{{route('house.detail' ,$locataire)}}" class="btn btn-success btn-sm btn-block text-white" > Plus de details </a>   </td> -->
                                   <td>
                                  <p>
                                    <a href="{{route('edit.locataire', $locataire)}}" class="btn btn-info btn-sm btn-block text-white">Edit</a>
                                        <span>
                                            <form action="{{route('destroy.locataire', $locataire)}}" method="POST">
                                                @csrf @method('DELETE')
                                                <button class="btn btn-danger btn-sm btn-block"
                                                onclick="return confirm('You can not recover deleted posts. Are you sure you want to delete this post?');">Delete</button>
                                                </form>
                                        </span>
                                    </p>
                                  <td>
                                   <!-- <td> <a href="{{route('edit.locataire', $locataire)}}" class="btn btn-info btn-sm btn-block text-white">Modication</a> </td>
                                   <td> <a href="{{route('destroy.locataire', $locataire)}}" class="btn btn-danger btn-sm btn-block"> Supprimer </a>   </td> -->

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

