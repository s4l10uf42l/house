@extends('layouts.app')

@section('content')



<div class="row justify-content-center" > 
<div class="card" style="width: 50rem;">
  <div class="card-body">
  
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <h4 class="text-center">Ajouter une Maintenance </h4>
          <hr>
      <form action="{{route('update.maintenance',$maintenance)}}" method="POST">
      @csrf @method('PATCH')
        <div class="form-group">
                <label>Appartement </label>
         
                <select class="custom-select mr-sm-2" name="appartement_id" value="{{$maintenance->appartement_id}}" id="inlineFormCustomSelect">
                   
                    <option selected>Choisir l'appartement</option>
                    @foreach ($appartements as $appartement)    
                    <option value= '{{ $appartement->noma }}' > {{ $appartement->noma }}</option>                  
                    @endforeach
  
                </select>
            </div>


            <div class="form-group">
                <label>Locataire </label>
         
                <select class="custom-select mr-sm-2" name="locataire_name" value="{{$maintenance->locataire_name}}" id="inlineFormCustomSelect">
                   
                    <option selected>Choisir locataire</option>
                    @foreach ($locataires as $locataire)    
                    <option value= '{{ $locataire->prenom }} {{$locataire->nom}}' > {{ $locataire->prenom }} {{$locataire->nom }}</option>                  
                    @endforeach
  
                </select>
            </div>

            <div class="form-group">
                <label>Type de maintenance</label>
         
                <select class="custom-select mr-sm-2" name="type" value="{{$maintenance->type}}" id="inlineFormCustomSelect">
                    <option value="Plomberie ou sanitaire" >Plomberie ou sanitaire  </option>
                    <option value="Electricité"> Electricité  </option>
                    <option value="Maçonnerie"> Maçonnerie </option>
                    <option value="Peinture"> Peinture </option>

                </select>
            </div>
            

            <div class="form-group">
                <label>Materiel</label>
                <input type="text" name="materiel" required class="form-control" value="{{$maintenance->materiel}}" id="exampleFormControlInput1" >
            </div>
            
            <div class="form-group">
                <label>Honoraire</label>
                <input type="text" name="honoraire" required class="form-control" value="{{$maintenance->honoraire}}" id="exampleFormControlInput1" >
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
