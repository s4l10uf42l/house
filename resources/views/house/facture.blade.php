@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Facturation</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                     <h4><strong>{{ auth()->user()->name }}</strong></h4>
                     <a class="btn btn-lg btn-primary" href="{{route('facture.form')}}" role="button"> Générer une facture </a>

                     

@endsection
