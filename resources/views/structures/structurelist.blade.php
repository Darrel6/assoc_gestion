@extends('partials.template')

@section('content')
@section('page')
   fedSAEI - Liste des structures
@endsection
@section('title')
    Liste des Structures
@endsection

<style>
    .table thead th{
         font-weight: bold;
     }

 </style>
 <div class="card mb-5" style="border-radius: 10px">
     <div class="card-body" >
         <table class="table table-striped text-center" >
             <thead >
                 <tr>
                     <th>#</th>
                     <th>Structure</th>
                     <th>Domaines d'activités</th>
                     <th>Localisation</th>
                     <th>Positionnement</th>
                     <th>Actions</th>
                 </tr>
             </thead>
             <tbody>
                 <tr>
                    @if ($structures->count() > 0)


                     @foreach ($structures as $structure)
                     <td> {{ $structure->id }} </td>
                     <td> {{ $structure->nom }} </td>
                    

                     <td ><a href="" data-toggle="modal" data-target="#modaldomaine{{ $structure->id }}">Lire</a></td>
                     <div class="modal fade" id="modaldomaine{{ $structure->id }}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                         <div class="modal-dialog modal-dialog-centered">
                           <div class="modal-content">
                             <div class="modal-header">
                               <h5 class="modal-title" id="exampleModalToggleLabel">Domaine d'activité</h5>
                               <button type="button" class="close" data-dismiss="modal" arial-label="close">
                                           <span aria-hidden="true">&times;</span>
                                       </button>
                             </div>
                             <div class="modal-body">
                              <p>{{  $structure->domaine_activite}}</p>
                              
                             </div>
                             <div class="modal-footer">
                             <button type="button" class="btn gray btn-outline-secondary" data-dismiss="modal">{{ _('Close')}}</button>
                  
                             </div>
                           </div>
                         </div>
                       </div>
                     <td ><a href="" data-toggle="modal" data-target="#modalLocation{{ $structure->id }}">Lire</a></td>
                     <div class="modal fade" id="modalLocation{{ $structure->id }}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                         <div class="modal-dialog modal-dialog-centered">
                           <div class="modal-content">
                             <div class="modal-header">
                               <h5 class="modal-title" id="exampleModalToggleLabel">Localisation</h5>
                               <button type="button" class="close" data-dismiss="modal" arial-label="close">
                                           <span aria-hidden="true">&times;</span>
                                       </button>
                             </div>
                             <div class="modal-body">
                              <p>{{ $structure->localisation}}</p>
                              
                             </div>
                             <div class="modal-footer">
                             <button type="button" class="btn gray btn-outline-secondary" data-dismiss="modal">{{ _('Close')}}</button>
                  
                             </div>
                           </div>
                         </div>
                       </div>
                    
                     <td ><a href="" data-toggle="modal" data-target="#modalpos{{ $structure->id }}">Lire</a></td>
                     <div class="modal fade" id="modalpos{{ $structure->id }}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                         <div class="modal-dialog modal-dialog-centered">
                           <div class="modal-content">
                             <div class="modal-header">
                               <h5 class="modal-title" id="exampleModalToggleLabel">Positionnement</h5>
                               <button type="button" class="close" data-dismiss="modal" arial-label="close">
                                           <span aria-hidden="true">&times;</span>
                                       </button>
                             </div>
                             <div class="modal-body">
                                @foreach ($position as $pos)

                             <p>{{ $pos }}</p>
                            
                        @endforeach
                              
                             </div>
                             <div class="modal-footer">
                             <button type="button" class="btn gray btn-outline-secondary" data-dismiss="modal">{{ _('Close')}}</button>
                  
                             </div>
                           </div>
                         </div>
                       </div>
                    

                     <td class="d-flex justify-content-around">
                        <a href="{{ route('detail') }}?id={{ Crypt::encrypt($structure->id) }}" class="btn btn-sm btn-info mr-2" ><i class="icon-eye menu-icon"></i></a>
                         <a href="{{ route('editStructure', $structure ) }}" class="btn btn-sm btn-primary mr-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $structure->id }}" ><i class="icon-pencil menu-icon"></i></a>
                         <a  href="{{ route('deleteStructure', $structure ) }}" class="btn btn-sm btn-danger "  data-bs-toggle="modal" data-bs-target="#exampleModalToggle{{ $structure->id }}" ><i class="icon-trash menu-icon"></i></a>


                     </td>
                 </tr>
                 @include('structures.editStructure')
                 @include('structures.deleteStructure')
                @endforeach
                @else
                <td colspan="8">Aucune structure</td>
                @endif

             </tbody>
         </table>

         <div class=" d-flex justify-content-end pt-4">
             <h5>{{ $structures-> links() }}</h5>
         </div>
     </div>
 </div>
 @endsection
