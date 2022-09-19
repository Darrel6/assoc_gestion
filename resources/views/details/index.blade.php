@extends('partials.template')

@section('content')
@section('page')
fedSAEI - Details
@endsection
@section('title')
Details sur la Structure
@endsection

<style>
.dark-color{
        text-decoration: underline
    }
 .dark-color  em {
        color: #4387F6;
        text-decoration: none
    }
    </style>
<section class="section about-section gray-bg" id="about">
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
    <div class="counter mt-3 mb-5">
    <div class="row">
        <div class="col-6 col-lg-3">
            <div class="count-data text-center">
                <h6 class="count h2" data-to="500" data-speed="500">{{ $structure_membres->count() }}</h6>
                <p class="m-0px font-w-600">Membres</p>
            </div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="count-data text-center">
                <h6 class="count h2" data-to="150" data-speed="150">{{count($nbrActivite)}}</h6>
                <p class="m-0px font-w-600">Activités Conjointes</p>
            </div>
        </div>
        <div class="col-6 col-lg-6 align-self-center">
            <div class="count-data text-center  ">
                <h4 class="m-0px font-w-600">
                    @foreach ($structures as $structure)
                    <a data-toggle="modal" data-target="#modalActivity" href="id={{ Crypt::encrypt($structure->id) }}">Listes des
                        Activités Conjointes</a>
                       @include('details.showAtivity')
                    </h4>
                    @endforeach
            </div>
        </div>
    </div>
</div>
    </div>
</section>

<div class="card mb-5" style="border-radius: 10px">
    <div class="card-body">
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom et Prenom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Fonction</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @if ($structure_membres->count() > 0)


                    @foreach ($structure_membres as $member)
                    <td>{{++$i}}</td>
                    <td> {{ $member->nom }} </td>
                    <td>{{ $member->email}}</td>
                    <td>{{ $member->telephone }}</td>
                    <td>{{ $member->fonction }}</td>

                    <td class="d-flex justify-content-around">
                        <a href="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalUpdate{{ $member->id }}"><i class="icon-pencil menu-icon"></i></a>
                        <a href="" class="btn btn-sm btn-danger" title="Supprimer" data-toggle="modal" data-target="#modalDelete{{ $member->id }}"><i class="icon-trash menu-icon"></i></a>


                    </td>
                </tr>
                @include('admin.members.delete')
                @include('admin.members.edit')
                @endforeach
                @else
                <td colspan="6">Aucun membre</td>
                @endif

            </tbody>
        </table>

        <div class=" d-flex justify-content-end pt-4">
            <h5>{{ $structure_membres-> links() }}</h5>
        </div>
    </div>
</div>
@endsection
