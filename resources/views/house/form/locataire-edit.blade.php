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
          <form action="{{route('update.locataire', $locataire)}}" method="POST">
                @csrf @method('PATCH')
        <div class="form-group">
                <label>Appartement </label>
         
                <select class="custom-select mr-sm-2" name="appartement_id" id="inlineFormCustomSelect">
                   
                    <option selected>Choisir l'appartement</option>
                    @foreach ($appartements as $appartement)    
                    <option value= '{{ $appartement->noma }}' > {{ $appartement->noma }}</option>                  
                    @endforeach
  
                </select>
            </div>
            <div class="form-group">
                <label>Prénom</label>
                <input type="text" name="prenom" required class="form-control" id="exampleFormControlInput1" placeholder="{{$locataire->prenom}}" value="{{$locataire->prenom}}">
            </div>
            <div class="form-group">
                <label>Nom</label>
                <input type="text" name="nom" required class="form-control" id="exampleFormControlInput1" placeholder="{{$locataire->nom}}"  value="{{$locataire->nom}}">
            </div>
            <div class="form-group">
                <label>Genre </label>
         
                <select class="custom-select mr-sm-2" name="sexe"  value="{{$locataire->sexe}}" id="inlineFormCustomSelect">
                   
                    <option value= 'Monsieur'>Homme </option>
                    <option value= 'Madame' >Femme</option>                  
                
  
                </select>
            </div>
            <div class="form-group">
                <label>Numéro d'identification nationale (NIN)</label>
                <input type="text" name="NIN"  value="{{$locataire->NIN}}" required class="form-control" id="exampleFormControlInput1" placeholder=" 000000000...">
           
           
                <label> Délivrée à :</label>
                <input type="text" name="lieudelivre" value="{{$locataire->lieudelivre}}"  required class="form-control" id="exampleFormControlInput1" placeholder=" 000000000...">
                
                <label> Date de délivrance du CNI</label>
                <input type="text" name="datedelivre"  value="{{$locataire->datedelivre}}" required class="form-control" id="exampleFormControlInput1" placeholder=" 000000000...">
            
            </div>

            <div class="form-group">
                <label>Date de naissance</label>
                <input type="text" name="date_naissance" value="{{$locataire->date_naissance}}"  required class="form-control" id="exampleFormControlInput1" placeholder=" jj/mm/aaaa">
            </div>
            <div class="form-group">
                <label>Lieu de naissance</label>
                <input type="text" name="lieu_naissance" value="{{$locataire->lieu_naissance}}" required class="form-control" id="exampleFormControlInput1" placeholder="Dakar,St Louis,...">
            </div>



            <div class="form-group">
                <label>Profession</label>
                <input type="text" name="profession" value="{{$locataire->profession}}" required class="form-control" id="exampleFormControlInput1" placeholder=" Avocat,Docteur,..">
            </div>

            <div class="form-group">
                <label>Telephone</label>
                <input type="text" name="contact" value="{{$locataire->contact}}"  required class="form-control" id="exampleFormControlInput1" placeholder=" +221 70 000 00 00">
            </div>


            <div class="form-group">
                <label> Début du contrat (Mois) </label>
         
                <select class="custom-select mr-sm-2" name="deb_mois"  value="{{$locataire->deb_mois}}" id="inlineFormCustomSelect">
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


            <div class="form-group">
                <label> Début du contrat (année) </label>
         
                <select class="custom-select mr-sm-2" name="deb_ans" value="{{$locataire->deb_ans}}"  id="inlineFormCustomSelect">
                    <option value='2020'>2022</option>
                    <option value= '2021'>2021</option>
                    <option value='2022'>2022</option>
                    <option value='2023'>2023</option>
                    <option value='2024 '>2024</option>
                    <option value= '2025'>2025</option>
                    <option value='2026'>2026</option>
                    <option value='2017'>2027</option>
                    <option value='2028'>2028</option>
                    <option value='2029'>2029</option>
                    <option value='2030'>2030</option>
                </select>
            </div>




            <div class="form-group">
                <label> Fin du contract (Mois) </label>
         
                <select class="custom-select mr-sm-2" name="fin_mois" value="{{$locataire->fin_mois}}" id="inlineFormCustomSelect">
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

                
            <div class="form-group">
                <label> Fin du contract (annee) </label>
         
                <select class="custom-select mr-sm-2" name="fin_ans" value="{{$locataire->fin_ans}}" id="inlineFormCustomSelect">
                    <option value='2020'>2020</option>
                    <option value= '2021'>2021</option>
                    <option value='2022'>2022</option>
                    <option value='2023'>2023</option>
                    <option value='2024 '>2024</option>
                    <option value= '2025'>2025</option>
                    <option value='2026'>2026</option>
                    <option value='2017'>2027</option>
                    <option value='2028'>2028</option>
                    <option value='2029'>2029</option>
                    <option value='2030'>2030</option>
                </select>
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
