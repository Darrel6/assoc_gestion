@extends('partials.template')

@section('content')
@section('page')
fedSAEI - Details
@endsection
@section('title')
Details sur la Structure
@endsection

<section class="section about-section gray-bg" id="about">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-lg-10 p-0 m-0">
                <div class="about-text go-to">
                    @foreach ($structures as $structure)
                    <h3 class="dark-color">{{$structure->nom}}</h3>
                    @endforeach

                    <h6 class="theme-color lead">
                        @foreach ($structure_membres as $dirigeant)
                        @if ($dirigeant->fonction == 'Dirigeant')
                        <div class="row about-list">

                            <div class="col-md-6">
                                <div class="media">
                                    <label>Nom</label>
                                    <p>{{$dirigeant->nom}}</p>
                                </div>
                                <div class="media">
                                    <label>Phone</label>
                                    <p>{{$dirigeant->telephone}}</p>
                                </div>
                                <div class="media">
                                    <label>E-mail</label>
                                    <p>{{$dirigeant->email}}</p>
                                </div>
                            </div>
                        </div>
                        @endif

                        @endforeach

                </div>
            </div>

        </div>
        <div class="counter">
            <div class="row">
                <div class="col-6 col-lg-3">
                    <div class="count-data text-center">
                        <h6 class="count h2" data-to="500" data-speed="500">{{$structure_membres->count()}}</h6>
                        <p class="m-0px font-w-600">Membres</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="count-data text-center">
                        <h6 class="count h2" data-to="150" data-speed="150">150</h6>
                        <p class="m-0px font-w-600">Activités</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="count-data text-center">
                        <h6 class="count h2" data-to="850" data-speed="850">850</h6>
                        <p class="m-0px font-w-600">Photo Capture</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="count-data text-center">
                        <h6 class="count h2" data-to="190" data-speed="190">190</h6>
                        <p class="m-0px font-w-600">Telephonic Talk</p>
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
                    @foreach ($structure_membres as $member)
                    <td>{{++$i}}</td>
                    <td> {{ $member->nom }} </td>
                    <td>{{ $member->email}}</td>
                    <td>{{ $member->telephone }}</td>
                    <td>{{ $member->fonction }}</td>

                    <td class="d-flex justify-content-around">
                    <a href="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalUpdate{{ $member->id }}" ><i class="icon-pencil menu-icon"></i></a>
                         <a  href="" class="btn btn-sm btn-danger" title="Supprimer" data-toggle="modal" data-target="#modalDelete{{ $member->id }}" ><i class="icon-trash menu-icon"></i></a>


                    </td>
                </tr>
                
                @endforeach


            </tbody>
        </table>

        <div class=" d-flex justify-content-end pt-4">
            <h5>{{ $structure_membres-> links() }}</h5>
        </div>
    </div>
</div>
@endsection
