@extends('layouts.app')

@section('content')



<div class="row justify-content-center" > 
<div class="card" style="width: 50rem;">
  <div class="card-body">
  
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <h4 class="text-center"> Modification des informations de Appartement {{$appartement->noma}} </h4>
          <hr>
          <form action="{{route('update.un_appartement', $appartement)}}" method="POST">
                @csrf @method('PATCH')
  
            <div class="form-group">
                <label> Nomenclature </label>
                <input type="text" name="noma" required class="form-control" id="exampleFormControlInput1" placeholder="{{$appartement->noma}}"  value= '{{ $appartement->noma }}'>
            </div>

            <div class="form-group">
                <label>Nom</label>
                <input type="text" name="nom" required class="form-control" id="exampleFormControlInput1" placeholder="{{$appartement->nom}}"  value="{{$appartement->nom}}">
            </div>


            <div class="form-group">
                <label>Compteur electricité</label>
                <input type="text" name="numb_elec" required class="form-control" id="exampleFormControlInput1" placeholder="{{$appartement->numb_elec}}"  value="{{$appartement->numb_elec}}">
            </div>

            <div class="form-group">
                <label>Compteur d'eau </label>
                <input type="text" name="numb_eau" required class="form-control" id="exampleFormControlInput1" placeholder="{{$appartement->numb_eau}}"  value="{{$appartement->numb_eau}}">
            </div>


            <div class="form-group">
                <label>Type</label>
                <input type="text" name="type" required class="form-control" id="exampleFormControlInput1" placeholder="{{$appartement->type}}"  value="{{$appartement->type}}">
            </div>

            <div class="form-group">
                <label> Prix </label>
                <input type="text" name="prix" required class="form-control" id="exampleFormControlInput1" placeholder="{{$appartement->prix}}"  value="{{$appartement->prix}}">
            </div>


            <div class="form-group">
                <label> Prix en lettre</label>
                <input type="text" name="prix_l" required class="form-control" id="exampleFormControlInput1" placeholder="{{$appartement->prix_l}}"  value="{{$appartement->prix_l}}">
            </div>

            <div class="form-group">
                <label>Les pieces </label>
                <input type="text" name="piece" required class="form-control" id="exampleFormControlInput1" placeholder="{{$appartement->piece}}"  value="{{$appartement->piece}}">
            </div>



            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-block" value=" Enregister">
            </div>
            </form>
      </div>
  </div>
</div>
  </div>
</div>
</div>



@endsection
