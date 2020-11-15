@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron">
        <h1> VILLA 211 </h1>
        <p class="lead">
        Bienvenu sur la platform de gestion des appartements.
        
        </p>
    <a class="btn btn-lg btn-primary" href="{{route('house.appartement')}}" role="button"> Se connecter &raquo;</a>
    </div>
</div>
@endsection
