@extends('partials.template')

@section('content')
@section('page')
fedSAEI - Activité
@endsection
@section('title')
Ajout de activites
@endsection

<style>
    .table thead th {
        font-weight: bold;
    }
</style>
<div class="card mb-5" style="border-radius: 10px">
    <div class="card-body">
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom </th>
                    <th>Date de l'évenement</th>
                    <th>Lieu de l'évenement</th>
                    <th>Les structures</th>
                    <th>Audios et vidéos de </th>
                    <th>Description</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($activites as $activite)


                    <td> {{ ++$i }} </td>
                    <td> {{ $activite['activity']}} </td>
                    <td> {{ $activite['date'] }} </td>
                    <td>{{ $activite['lieu'] }}</td>
                    <td>

                        @foreach ($activite['nameStructure'] as $structure)
                        {{ $structure[0]->nom }}
                        @endforeach
                    </td>
                    <td>
                        @php
                        $decode = json_decode($activite['visuel'])
                        @endphp

                        @foreach ($decode as $visuel)
                        {{$visuel}}
                        @endforeach
                    </td>
                    <td>{{ $activite['description']}}</td>

                    <td class="d-flex justify-content-around">
                        <a href="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalUpdate{{ $activite['idact'] }}"><i class="icon-pencil menu-icon"></i></a>
                        <a href="" class="btn btn-sm btn-danger" title="Supprimer" data-toggle="modal" data-target="#modalDelete{{$activite['idact'] }}"><i class="icon-trash menu-icon"></i></a>
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
