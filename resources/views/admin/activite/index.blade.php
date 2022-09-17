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
                    <th>Audios et vidéos de </th>
                    <th>Description</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($activites as $activite)
                    <tr>


                        <td> </td>
                        <td> {{ $activite['nom'] }} </td>
                        <td>{{ $activite['date_event'] }} </td>
                        <td>{{ $activite['lieu'] }}</td>
                        <td>
                            @if ($activite['structures'])
                                <ul>
                                    @foreach ($activite['structures'] as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            @else
                                <span class="badge rounded-pill bg-primary">
                                    Bientot disponible
                                </span>
                            @endif
                        </td>

                        <td>
                            <a href="" data-toggle="modal" data-target="#exampleModal"
                                class="btn btn-sm btn-info mr-2"><i class="icon-eye menu-icon hover-shadow"
                                    onclick="openModal();currentSlide(1)"></i></a>
                        </td>
                        <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <!-- Carousel markup: https://getbootstrap.com/docs/4.4/components/carousel/ -->
                                        <div id="carouselExample" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                @foreach ($activite['visuel'] as $visuel)
                                                    <div class="carousel-item active">
                                                        
                                                        <img class="d-block w-100" src="{{ $visuel }}">
                                                    </div>
                                                @endforeach
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExample" role="button"
                                                data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExample" role="button"
                                                data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <td></td>

                        <td class="d-flex justify-content-around">
                            <a href="" class="btn btn-sm btn-primary" data-toggle="modal"
                                data-target="#modalUpdate"><i class="icon-pencil menu-icon"></i></a>
                            <a href="" class="btn btn-sm btn-danger" title="Supprimer" data-toggle="modal"
                                data-target="#modalDelete"><i class="icon-trash menu-icon"></i></a>
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
