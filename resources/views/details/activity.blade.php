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
    .table thead th {
        font-weight: bold;
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
                @if ($dirigeant->fonction->nom == 'Dirigeant')
                    <h4 class="dark-color">Nom du dirigeant : <em>{{ $dirigeant->nom }}</em></h4>
                    <h4 class="dark-color">Email : <em>{{ $dirigeant->email }}</em></h4>
                    <h4 class="dark-color">Téléphone : <em>{{ $dirigeant->telephone }}</em></h4>
                @endif
            @endforeach
        </div>
        <div class="col">
            @foreach ($structure_membres as $representant)
                @if ($representant->fonction->nom == 'Représentant')
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
        <table class="table table-striped  text-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom </th>
                    <th>Date de l'évenement</th>
                    <th>Lieu de l'évenement</th>
                    <th>Visuels</th>
                    <th>Description</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($activity_info as $activite)
                        <td>{{ ++$num }}</td>
                        <td class="desc"><a href="" data-toggle="modal" data-target="#modalnom{{ $activite['idact'] }}">Lire</a></td>
                        <div class="modal fade" id="modalnom{{ $activite['idact'] }}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalToggleLabel">Nom de l'évènement</h5>
                                  <button type="button" class="close" data-dismiss="modal" arial-label="close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                </div>
                                <div class="modal-body">
                                </p>{{ $activite['nom']  }} </p>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn gray btn-outline-secondary" data-dismiss="modal">{{ _('Close')}}</button>
                     
                                </div>
                              </div>
                            </div>
                          </div>
                        <td class="desc"><a href="" data-toggle="modal" data-target="#modaldate{{ $activite['idact'] }}">Lire</a></td>
                        <div class="modal fade" id="modaldate{{ $activite['idact'] }}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalToggleLabel">Date de l'évènement</h5>
                                  <button type="button" class="close" data-dismiss="modal" arial-label="close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                </div>
                                <div class="modal-body">
                                </p>{{ date('le d/m/Y', strtotime($activite['date_event']))  }} </p>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn gray btn-outline-secondary" data-dismiss="modal">{{ _('Close')}}</button>
                     
                                </div>
                              </div>
                            </div>
                          </div>
                        <td class="desc"><a href="" data-toggle="modal" data-target="#modalLieu{{ $activite['idact'] }}">Lire</a></td>
                        <div class="modal fade" id="modalLieu{{ $activite['idact'] }}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalToggleLabel">Lieu de l'évènement</h5>
                                  <button type="button" class="close" data-dismiss="modal" arial-label="close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                </div>
                                <div class="modal-body">
                                </p>{{ $activite['lieu'] }}</p>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn gray btn-outline-secondary" data-dismiss="modal">{{ _('Close')}}</button>
                     
                                </div>
                              </div>
                            </div>
                          </div>
                        <td>
                            @foreach ($activite['visuel'] as $visuel)
                                            <div class="carousel-item active">
                                               
                                                <a href="{{ route('visuels') }}?id={{ Crypt::encrypt($activite['idact']) }}"  class="btn btn-sm btn-info mr-2" ><i class="icon-eye menu-icon hover-shadow" onclick="openModal();currentSlide(1)"></i></a>
                                            </div>
                                            @endforeach
                            
                        </td>
                        
                        <td class="desc"><a href="" data-toggle="modal" data-target="#modaldesc{{ $activite['idact'] }}">Lire</a></td>
                        <div class="modal fade" id="modaldesc{{ $activite['idact'] }}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalToggleLabel">Description</h5>
                                  <button type="button" class="close" data-dismiss="modal" arial-label="close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                </div>
                                <div class="modal-body">
                                 <p>{{ $activite['description'] }} </p>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn gray btn-outline-secondary" data-dismiss="modal">{{ _('Close')}}</button>
                     
                                </div>
                              </div>
                            </div>
                          </div>
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
