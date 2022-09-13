@extends('partials.template')

@section('content')
@section('page')
    fedSAEI - Ajout de Dirigeants
@endsection
@section('title')
    Ajout de Dirigeants
@endsection

<div class="col-md-9 grid-margin stretch-card m-auto mb-8">
    <div class="card mb-5">
        <div class="card-body">
            <form class="forms-sample" method="POST" action="{{ route('addDirigeant') }}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputUsername1">Nom du Dirigeant</label>
                    <input type="text" class="form-control" name="nom_dirigeant"
                        placeholder="Entrer le nom du dirigeant">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="email_dirigeant" placeholder="Entrer l'Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Numéro de Téléphone</label>
                    <input type="number" class="form-control" name="tel_dirigeant"
                        placeholder="Entrer le numero de télephone">
                </div>
                <div class="form-group">
                    <label for="exampleSelectGender">Choisir Structure</label>

                    <select class="form-control" id="exampleSelectGender" name="struct_id">
                        <option value="">-- -- --</option>
                        @foreach ($structures as $structure)
                            <option value="{{ $structure->id }}">{{ $structure->nom_struct }}</option>
                        @endforeach
                    </select>

                </div>

                <button type="submit" class="btn btn-primary mr-2 butt">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
