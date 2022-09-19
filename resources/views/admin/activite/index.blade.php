@extends('partials.template')

@section('content')
@section('page')
fedSAEI - Activité
@endsection
@section('title')
    Listes des Activités
@endsection

<style>
    .table thead th {
        font-weight: bold;
    }

    .modal-dialog {
        max-width: 75%;
        margin: 30px auto;
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
                    <th>Visuels </th>
                    <th>Description</th>
                    <th>Actions</th>

                </tr>
            </thead>
            <tbody>
                @if (count($activites) > 0)
                @foreach ($activites as $activite)
                <tr>


                    <td> </td>
                    <td> {{ $activite['nom'] }} </td>
                    <td>{{ $activite['date_event'] }} </td>
                    <td>{{ $activite['lieu'] }}</td>
                    <td>
                        @if ($activite['structures'])
                       
                            @foreach ($activite['structures'] as $item)
                            <li>{{ $item }}</li>
                            @endforeach
                        
                        @else
                        <span class="badge rounded-pill bg-primary">
                            Bientot disponible
                        </span>
                        @endif
                    </td>

                    <td>
                        <a href="" data-toggle="modal" data-target="#exampleModal" class="btn btn-sm btn-info mr-2"><i class="icon-eye menu-icon hover-shadow" onclick="openModal();currentSlide(1)"></i></a>
                    </td>
                    @include('admin.activite.showVisuel')
                    <td>{{ $activite['description'] }}</td>
                    <td class="d-flex justify-content-around ">
                        <a href="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalUpdate{{ $activite['idact'] }}"><i class="icon-pencil menu-icon"></i></a>
                        <a href="" class="btn btn-sm btn-danger" title="Supprimer" data-toggle="modal" data-target="#modalDelete{{ $activite['idact'] }}"><i class="icon-trash menu-icon"></i></a>
                    </td>
                </tr>
                
                @endforeach
                @else
                <td colspan="7">Aucune activité</td>
                @endif
                
                @include('admin.activite.delete')
                 @include('admin.activite.edit')
            </tbody>
        </table>

        <div class=" d-flex justify-content-end pt-4">
            <h5></h5>
        </div>
    </div>
</div>
@endsection
