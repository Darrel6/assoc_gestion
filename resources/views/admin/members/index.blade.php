@extends('partials.template')

@section('content')
@section('page')
   fedSAEI - Ajout de member
@endsection
@section('title')
  Ajout de members
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
                     <th>Nom et Prénom</th>
                     <th>Email</th>
                     <th>Téléphone</th>
                     <th>Fonction</th>
                     <th>Structure</th>

                 </tr>
             </thead>
             <tbody>
                 <tr>
                     @foreach ($members as $member)
                     <td> {{ ++$i }} </td>
                     <td> {{ $member->nom }} </td>
                     <td>{{ $member->email }}</td>
                     <td>{{ $member->telephone }}</td>
                     <td>{{ $member->fonction }}</td>
                     <td> {{ $member->structure->nom}} </td>

                     <td class="d-flex justify-content-around">
                         <a href="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalUpdate{{ $member->id }}" ><i class="icon-pencil menu-icon"></i></a>
                         <a  href="" class="btn btn-sm btn-danger" title="Supprimer" data-toggle="modal" data-target="#modalDelete{{ $member->id }}" ><i class="icon-trash menu-icon"></i></a>
                     </td>
                 </tr>
                 @include('admin.members.delete')
                 @include('admin.members.edit')
                @endforeach


             </tbody>
         </table>

         <div class=" d-flex justify-content-end pt-4">
             <h5>{{ $members-> links() }}</h5>
         </div>
     </div>
 </div>
 @endsection
