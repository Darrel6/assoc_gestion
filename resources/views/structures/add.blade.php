@extends('partials.template')

@section('content')
@section('page')
   fedSAEI - Ajout de structure
@endsection
@section('title')
  Ajout de Structures
@endsection
    
<div class="col-md-9 grid-margin stretch-card m-auto mb-8">
  <div class="card mb-5">
    <div class="card-body">
      <form class="forms-sample" method="POST" action="{{ route('addStructure') }}">
        @csrf
        <div class="form-group">
          <label for="exampleInputUsername1">Nom de la Structure</label>
          <input type="text" class="form-control" name="nom" placeholder="Entrer le nom de la structure">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" class="form-control" name="email" placeholder="Entrer l'Email">
        </div>
        <div class="form-group">
          <label for="exampleInputUsername1">Numéro de Téléphone</label>
          <input type="number" class="form-control" name="tel" placeholder="Entrer le numero de télephone">
        </div>
        <div class="form-group">
          <label for="exampleInputUsername1">Domaines d'Activités</label>
          <input type="text" class="form-control" name="domaine_activite" placeholder="Entrer le Domaine d'activité">
        </div>
        <div class="form-group">
          <label for="exampleInputUsername1">Adresse ou Localisation</label>
          <input type="text" class="form-control" name="localisation" placeholder="Entrer l'adresse ou la localisation">
        </div>
        <div class="form-group">
          <label for="exampleSelectGender">Choisir un Positionnement</label>

          <select class="form-control" id="exampleSelectGender" name="positionnement">
              <option value="">Selectionez votre positionnement</option>
              <option value="Pré-idéation">Pré-idéation</option>
              <option value="Idéation">Idéation</option>
              <option value="Prototypage">Prototypage</option>
              <option value="Incubation">Incubation</option>
              <option value="Accélération">Accélération</option>
             
          </select>

      </div>

     
        <button type="submit" class="btn btn-primary mr-2 butt">Submit</button>
      </form>
    </div>
  </div>
</div>
@endsection