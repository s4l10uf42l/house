@extends('layouts.app')

@section('content')



<div class="row justify-content-center" > 
<div class="card" style="width: 50rem;">
  <div class="card-body">
  
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-9">
          <h4 class="text-center"> Générer une facture </h4>
          <hr>
      <form action="{{route('update.facture',$facture)}}" method="POST">
      @csrf @method('PATCH')
        <div class="form-group">
                <label>Appartement </label>
         
                <select class="custom-select mr-sm-2" name="appartement_id"  value="{{$facture->appartement_id}}" id="inlineFormCustomSelect">
                   
                    @foreach ($appartements as $appartement)    
                    <option value= '{{ $appartement->noma }}' > {{ $appartement->noma }}</option>                  
                    @endforeach
  
                </select>
            </div>

            <div class="form-group">
                <label>type </label>
         
                <select class="custom-select mr-sm-2" name="type" value="{{$facture->type}}" id="inlineFormCustomSelect">
                    <option value="Mensuel">Mensuel </option>
                    <option value=" Avance et caution"> Avance et caution </option>
                    <option value="journalière"> journalière </option>
                </select>
            </div>
            

            <div class="form-group">
                <label>Locataire </label>
         
                <select class="custom-select mr-sm-2" name="locataire_name"  value="{{$facture->locataire_name}}" id="inlineFormCustomSelect">
                        @foreach ($locataires as $locataire)    
                    <option value= '{{ $locataire->prenom }} {{$locataire->nom}}' > {{ $locataire->prenom }} {{$locataire->nom }}</option>                  
                    @endforeach
  
                </select>
            </div>


            <div class="form-group">
            <label > Pour la periode  du </label>
                <input id="bday-month" type="month" name="deb_mois" value="2020-11">  au <input id="bday-month" type="month" name="fin_mois" value="2020-11">
            </div>


            <!-- <div class="form-group">
                <label> Mois </label>
                <select class="custom-select mr-sm-2" name="mois" id="inlineFormCustomSelect">
                    <option value='Janvier'>Janvier</option>
                    <option value= 'Février'>Février</option>
                    <option value='Mars'>Mars</option>
                    <option value='Avril'>Avril</option>
                    <option value='Mai '>Mai</option>
                    <option value= 'Juin'>Juin</option>
                    <option value='Juillet'>Juillet</option>
                    <option value='Août'>Août</option>
                    <option value='Septembre'>Septembre</option>
                    <option value='Octobre'>Octobre</option>
                    <option value='Novembre'>Novembre</option>
                    <option value='Décembre'>Décembre</option>
                </select>
            </div>
        -->
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
