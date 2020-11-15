@extends('layouts.app')

@section('content')



<div class="row justify-content-center" > 
<div class="card" style="width: 50rem;">
  <div class="card-body">
  
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <h4 class="text-center">Ajouter un nouveau locataire</h4>
          <hr>
      <form action="{{route('store.appartement')}}" method="POST">
        @csrf
        <div class="form-group">
                <label>Appartement </label>
         
                <select class="custom-select mr-sm-2" name="appartement_id" id="inlineFormCustomSelect">
                    <option selected>Choisir l'appartement</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="form-group">
                <label>Prénom</label>
                <input type="text" name="prenom" required class="form-control" id="exampleFormControlInput1" placeholder="Prenom">
            </div>
            <div class="form-group">
                <label>Nom</label>
                <input type="text" name="nom" required class="form-control" id="exampleFormControlInput1" placeholder="Nom">
            </div>

            <div class="form-group">
                <label>Numéro d'identification nationale (NIN)</label>
                <input type="text" name="NIN" required class="form-control" id="exampleFormControlInput1" placeholder=" 000000000...">
            </div>

            <div class="form-group">
                <label>Date de naissance</label>
                <input type="text" name="date-naissance" required class="form-control" id="exampleFormControlInput1" placeholder=" jj/mm/aaaa">
            </div>
            <div class="form-group">
                <label>Lieu de naissance</label>
                <input type="text" name="lieu-naissance" required class="form-control" id="exampleFormControlInput1" placeholder="Dakar,St Louis,...">
            </div>



            <div class="form-group">
                <label>Profession</label>
                <input type="text" name="profession" required class="form-control" id="exampleFormControlInput1" placeholder=" Avocat,Docteur,..">
            </div>

            <div class="form-group">
                <label>Telephone</label>
                <input type="text" name="contact" required class="form-control" id="exampleFormControlInput1" placeholder=" +221 70 000 00 00">
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
