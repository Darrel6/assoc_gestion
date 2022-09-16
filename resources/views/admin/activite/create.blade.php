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
            <form class="forms-sample" method="post" action="{{ route('activite.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputUsername1">Nom de l'évenement</label>
                    <input type="text" class="form-control" name="nom"
                        placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Date de l'activité</label>
                    <input type="date" class="form-control" name="date_event"
                        placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Lieu de l'evenement</label>
                    <input type="text" class="form-control" name="lieu" placeholder="lieu de l'evenement">
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Photos ou videos de l'evement</label>
                    <input type="file" class="form-control" name="visuel[]"
                       multiple placeholder="Entrer le numero de télephone">
                </div>
                <div class="form-group">
                    <label for="exampleSelectGender">Les structures</label>
                    <select multiple="multiple" class="js-example-basic-multiple  form-control" id="exampleSelectGender" name="structure_id[]">
                        @foreach ($structures as $structure)
                        <option value="{{$structure->id}}">{{$structure->nom}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="form-group">
                    <label for="exampleSelectGender">Description de l'evenement</label>
                    <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>


                </div>

                <button type="submit" class="btn btn-primary mr-2 butt">Ajouter</button>
            </form>
        </div>
    </div>
</div>
@endsection
