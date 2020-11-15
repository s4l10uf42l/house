@extends('layouts.app')

@section('content')



<div class="row justify-content-center" > 
<div class="card" style="width: 50rem;">
  <div class="card-body">
  
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <h4 class="text-center"> Générer une facture </h4>
          <hr>
      <form action="{{route('store.facture')}}" method="POST">
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
                <label>type </label>
         
                <select class="custom-select mr-sm-2" name="appartement_id" id="inlineFormCustomSelect">
                    <option selected>Mensuel </option>
                    <option value="1"> Avance et caution </option>
                    <option value="2"> journalière </option>
                </select>
            </div>
            
            

            <div class="form-group">
                <label>Profession</label>
                <input type="text" name="profession" required class="form-control" id="exampleFormControlInput1" placeholder=" Avocat,Docteur,..">
            </div>

            <div class="form-group">
                <label>locataire </label>
                <select class="custom-select mr-sm-2" name="locataire_id" id="inlineFormCustomSelect">
                    <option selected>L1 </option>
                    <option value="1"> L2</option>
                    <option value="2"> L3 </option>
                </select>
            </div>


            <div class="form-group">
            <label > Mois ?</label>
                <input id="bday-month" type="month" name="mois" value="2020-11">
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
