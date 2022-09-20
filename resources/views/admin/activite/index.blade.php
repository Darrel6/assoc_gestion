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

   
    td.desc{
        font-size: 12px;
      white-space: pre;
       
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


                    <td>{{ ++$num }} </td>
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
                    
                    <td class="desc"><a href="" data-toggle="modal" data-target="#modalstruct{{ $activite['idact'] }}">Lire</a></td>
                    <div class="modal fade" id="modalstruct{{ $activite['idact'] }}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalToggleLabel">Structures</h5>
                              <button type="button" class="close" data-dismiss="modal" arial-label="close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                            </div>
                            <div class="modal-body">
                             <p> @if ($activite['structures'])

                                @foreach ($activite['structures'] as $item)
                                <li>{{ $item }}</li>
                                @endforeach
    
                            @else
                            <span class="badge rounded-pill bg-primary">
                                Bientot disponible
                            </span>
                            @endif</p>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn gray btn-outline-secondary" data-dismiss="modal">{{ _('Close')}}</button>
                 
                            </div>
                          </div>
                        </div>
                      </div>

                    <td>

                        <a href="{{ route('visuels') }}?id={{ Crypt::encrypt($activite['idact']) }}"  class="btn btn-sm btn-info mr-2" ><i class="icon-eye menu-icon hover-shadow" onclick="openModal();currentSlide(1)"></i></a>

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
                    <td class="d-flex justify-content-around ">
                        <a href="" class="btn btn-sm btn-danger" title="Supprimer" data-toggle="modal" data-target="#modalDelete{{ $activite['idact'] }}"><i class="icon-trash menu-icon"></i></a>
                    </td>
                </tr>

                @include('admin.activite.delete')
                 @include('admin.activite.edit')
                @endforeach
                @else
                <td colspan="7">Aucune activité</td>
                @endif

            </tbody>
        </table>

        <div class=" d-flex justify-content-end pt-4">
            <h5></h5>
        </div>
    </div>
</div>
@endsection
