@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
            
                <div class="card-header">Maintenances</div>

                            <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">Appartement</th>
                                <th scope="col">Locataire </th>
                                <th scope="col">Type</th>
                                <th scope="col">Honoraire</th>
                                <th scope="col">Materiel</th>
                                <th scope="col"></th>       
                                <th scope="col"></th>   
                                </tr>
                            </thead>
                            <tbody>
                               
                                @foreach ($maintenances as $maintenance)
                                <tr>
                                    <td> {{ $maintenance->appartement_id }}</td>
                                    <td> {{ $maintenance->locataire_name }}</td>
                                    <td> {{ $maintenance->type }}</td>
                                    <td>{{ $maintenance->honoraire}} </td>
                                    <td> {{ $maintenance->materiel}}</td>
                                    
                                    <td>
                                    <p>
                                        <a href="{{route('edit.maintenance', $maintenance)}}" class="btn btn-info btn-sm btn-block text-white">Edit</a>
                                            <span>
                                                <form action="{{route('destroy.maintenance', $maintenance)}}" method="POST">
                                                    @csrf @method('DELETE')
                                                    <button class="btn btn-danger btn-sm btn-block"
                                                    onclick="return confirm('You can not recover deleted posts. Are you sure you want to delete this post?');">Delete</button>
                                                    </form>
                                            </span>
                                        </p>
                                    <td>
                                </tr>
                                @endforeach
                          
                            </tbody>
                            </table>


                                </div>
                                <a class="btn btn-lg btn-primary" href="{{route('maintenance.form')}}" role="button"> Enregistrer une maintenance</a>

                               </div>
                         </div>
                  </div>

              </div>
        </div>  
  </div>
        

@endsection
