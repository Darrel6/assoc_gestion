@extends('partials.template')

@section('content')
@section('page')
   fedSAEI - Ajout de Fonctions
@endsection
@section('title')
  Ajout de Fonctions
@endsection
    
<div class="col-md-9 grid-margin stretch-card m-auto mb-8">
  <div class="card mb-5">
    <div class="card-body">
      <form class="forms-sample" method="POST" action="{{ route('addFonction') }}">
        @csrf
        <div class="form-group">
          <label for="exampleInputUsername1">Nom de la Fonction</label>
          <input type="text" class="form-control" name="nom" placeholder="Entrer le nom de la fonction">
        </div>
        <button type="submit" class="btn btn-primary mr-2 butt">Ajouter</button>
      </form>
    </div>
  </div>
</div>
@endsection