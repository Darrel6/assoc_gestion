@extends('partials.template')

@section('content')
@section('page')
    fedSAEI | Ajout de Dirigeants
@endsection
@section('title')
    Ajout de membres
@endsection

<div class="col-md-9 grid-margin stretch-card m-auto mb-8">
    <div class="card mb-5">
        <div class="card-body">
            <form class="forms-sample" method="post" action="{{ route('members.store') }}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputUsername1">Nom et Prénom</label>
                    <input type="text" class="form-control" name="nom"
                        placeholder="Entrer le nom du membre">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Entrer l'Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Numéro de Téléphone</label>
                    <input type="number" class="form-control" name="telephone"
                        placeholder="Entrer le numero de télephone">
                </div>
                <div class="form-group">
                    <label for="exampleSelectGender">La fonction</label>

                    <select class="form-control" id="exampleSelectGender" name="fonction">
                        <option value="Dirigeant">Dirigeant</option>
                        <option value="Comptable">Comptable</option>
                        <option value="Sécrétaire">Sécrétaire</option>
                        <option value="Représentant">Représentant</option>
                    </select>

                </div>
                <div class="form-group">
                    <label for="exampleSelectGender">Choisir Structure</label>

                    <select class="form-control" id="exampleSelectGender" name="structure_id">
                        @foreach ($members as $member)
                            <option value="{{$member->id}}">{{$member->nom}}</option>

                        @endforeach

                    </select>

                </div>

                <button type="submit" class="btn btn-primary mr-2 butt">Ajouter</button>
            </form>
        </div>
    </div>
</div>
@endsection
