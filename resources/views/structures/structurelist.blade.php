@extends('partials.template')

@section('content')
@section('page')
   fedSAEI - Ajout de structure
@endsection
@section('title')
  Ajout de Structures
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
                     <th>Email</th>
                     <th>Téléphone</th>
                     <th>Domaines d'activités</th>
                     <th>Localisation</th>
                     <th>Positionnement</th>
                     <th>Actions</th>
                 </tr>
             </thead>
             <tbody>
                 <tr>
                     @foreach ($structures as $structure)
                     <td> {{ $structure->id }} </td>
                     <td> {{ $structure->nom_struct }} </td>
                     <td>{{ $structure->email_struct }}</td>
                     <td>{{ $structure->tel_struct }}</td>
                     <td>{{ $structure->domaine_activite }}</td>
                     <td> {{ $structure->location}} </td>
                     <td> {{ $structure->positionnement}} </td>
                    
                     <td class="d-flex justify-content-around">
                         <a href="{{ route('editStructure', $structure ) }}" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $structure->id }}" ><i class="icon-pencil menu-icon"></i></a>
                         <a  href="{{ route('deleteStructure', $structure ) }}" class="btn btn-sm btn-danger"  data-bs-toggle="modal" data-bs-target="#exampleModalToggle{{ $structure->id }}" ><i class="icon-trash menu-icon"></i></a>
 
                        
                     </td>
                 </tr>
                 @include('components.editStructure')
                 @include('components.deleteStructure')
                @endforeach
                     
 
             </tbody>
         </table>
         
         <div class=" d-flex justify-content-end pt-4">
             <h5>{{ $structures-> links() }}</h5>
         </div>
     </div>
 </div>
 @endsection