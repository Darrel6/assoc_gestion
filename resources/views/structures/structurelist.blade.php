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
                     <td >{{  $structure->domaine_activite}}</td>
                     <td >{{ $structure->localisation}}</td>
                     <td >
                        @php
                            $positonnements = json_decode($structure->positionnement)
                        @endphp
                        @foreach ($positonnements as $positonnement)
                                    {{$positonnement}}
                        @endforeach
                     </td>
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
