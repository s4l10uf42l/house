
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Appartement</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                     <h4><strong>{{ auth()->user()->name }}</strong></h4>
                     <a class="btn btn-lg btn-primary" href="{{route('appartement.form')}}" role="button"> Ajouter un locataire</a>

                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

