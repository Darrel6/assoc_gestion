@extends('partials.template')
@section('content')
<div class="row">
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"> Nombres de Structures</h4>
                <div class="aligner-wrapper">
                    <canvas id="sessionsDoughnutChart" height="210"></canvas>
                    <div class="wrapper d-flex flex-column justify-content-center absolute absolute-center">
                        <h2 class="text-center mb-0 font-weight-bold">{{$structures->count()}}</h2>
                        <small class="d-block text-center text-muted  font-weight-semibold mb-0">Structures</small>
                    </div>
                </div>

            </div>



        </div>
    </div>

    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"> Nombres de membres</h4>
                <div class="aligner-wrapper">
                    <canvas id="sessionsDoughnutChart" height="210"></canvas>
                    <div class="wrapper d-flex flex-column justify-content-center absolute absolute-center">
                        <h2 class="text-center mb-0 font-weight-bold">{{$membres->count()}}</h2>
                        <small class="d-block text-center text-muted  font-weight-semibold mb-0">Membres</small>
                    </div>
                </div>

            </div>



        </div>
    </div>

    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"> Nombres d'activités</h4>
                <div class="aligner-wrapper">
                    <canvas id="sessionsDoughnutChart" height="210"></canvas>
                    <div class="wrapper d-flex flex-column justify-content-center absolute absolute-center">
                        <h2 class="text-center mb-0 font-weight-bold">{{$activites->count()}}</h2>
                        <small class="d-block text-center text-muted  font-weight-semibold mb-0">Activités</small>
                    </div>
                </div>

            </div>



        </div>
    </div>

</div>
</div>

@endsection
