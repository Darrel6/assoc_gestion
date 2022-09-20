@extends('partials.template')
@section('content')
<div class="row">
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Sessions by channel</h4>
                <div class="aligner-wrapper">
                    <canvas id="sessionsDoughnutChart" height="210"></canvas>
                    <div class="wrapper d-flex flex-column justify-content-center absolute absolute-center">
                        <h2 class="text-center mb-0 font-weight-bold">8.234</h2>
                        <small class="d-block text-center text-muted  font-weight-semibold mb-0">Total Leads</small>
                    </div>
                </div>
                <div class="wrapper mt-4 d-flex flex-wrap align-items-cente">
                    <div class="d-flex">
                        <span class="square-indicator bg-danger ml-2"></span>
                        <p class="mb-0 ml-2">Assigned</p>
                    </div>
                    <div class="d-flex">
                        <span class="square-indicator bg-success ml-2"></span>
                        <p class="mb-0 ml-2">Not Assigned</p>
                    </div>
                    <div class="d-flex">
                        <span class="square-indicator bg-warning ml-2"></span>
                        <p class="mb-0 ml-2">Reassigned</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body performane-indicator-card">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Default striped example" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress mt-5">
                    <div class="progress-bar progress-bar-striped bg-success progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Success striped example" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress mt-5">
                    <div class="progress-bar progress-bar-striped bg-info progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Info striped example" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress mt-5">
                    <div class="progress-bar progress-bar-striped bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Warning striped example" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress mt-5">
                    <div class="progress-bar progress-bar-striped bg-danger progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Danger striped example" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>


            </div>
            </div>
            <div id="performance-indicator-chart" class="ct-chart mt-4"></div>
        </div>
    </div>
</div>
</div>

@endsection
