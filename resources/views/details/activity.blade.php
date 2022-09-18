@extends('partials.template')

@section('content')
@section('page')
    fedSAEI - Details
@endsection
@section('title')
    Details des activités
@endsection


<style>
    em {
        color: #4387F6
    }
</style>
<div class="container">
    <div class="row">
        <div class="col">
            @foreach ($structures as $structure)
                <h4 class="dark-color">Nom de la Structure : <em>{{ $structure->nom }}</em></h4>
                <h4 class="dark-color">Email : <em>{{ $structure->email }}</em></h4>
                <h4 class="dark-color">Téléphone : <em>{{ $structure->tel }}</em></h4>
                <h4 class="dark-color">Localisation : <em>{{ $structure->localisation }}</em></h4>
            @endforeach
        </div>
        <div class="col">
            @foreach ($structure_membres as $dirigeant)
                @if ($dirigeant->fonction == 'Dirigeant')
                    <h4 class="dark-color">Nom du dirigeant : <em>{{ $dirigeant->nom }}</em></h4>
                    <h4 class="dark-color">Email : <em>{{ $dirigeant->email }}</em></h4>
                    <h4 class="dark-color">Téléphone : <em>{{ $dirigeant->telephone }}</em></h4>
                @endif
            @endforeach
        </div>
        <div class="col">
            @foreach ($structure_membres as $representant)
                @if ($representant->fonction == 'Représentant')
                    <h4 class="dark-color">Nom du Représentant : <em>{{ $representant->nom }}</em></h4>
                    <h4 class="dark-color">Email : <em>{{ $representant->email }}</em></h4>
                    <h4 class="dark-color">Téléphone : <em>{{ $representant->telephone }}</em></h4>
                @endif
            @endforeach
        </div>
    </div>
</div>

<div class="card mb-5 mt-3" style="border-radius: 10px">
    <div class="card-body">
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom </th>
                    <th>Date de l'évenement</th>
                    <th>Lieu de l'évenement</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($activity_info as $activity)
                        <td></td>
                        <td> {{ $activity['nom'] }} </td>
                        <td>{{ $activity['date_event'] }}</td>
                        <td>{{ $activity['lieu'] }}</td>
                        <td>{{ $activity['description'] }}</td>

                        <td class="d-flex justify-content-around">
                            <a href="" class="btn btn-sm btn-primary" data-toggle="modal"
                                data-target="#modalUpdate{{ $activity['id'] }}"><i class="icon-pencil menu-icon"></i></a>
                            <a href="" class="btn btn-sm btn-danger" title="Supprimer" data-toggle="modal"
                                data-target="#modalDelete{{ $activity['id'] }}"><i class="icon-trash menu-icon"></i></a>


                        </td>
                </tr>
                @endforeach


            </tbody>
        </table>

        <div class=" d-flex justify-content-end pt-4">
            <h5></h5>
        </div>
    </div>
</div>
@endsection
