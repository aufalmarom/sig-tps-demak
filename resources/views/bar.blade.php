@extends('dashboard')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Recap Datas</h1>
</div>



<div class="row">
    <div class="col-lg-12 col-xl-12 col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Pemilihan Umum Presiden</h6>
            </div>
            <div class="card-body">
                <div class="chart-bar">
                <canvas id="presiden"></canvas>
                </div>
                <hr>Descriptione opo iki?
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-xl-12 col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Pemilihan Legislatif DPD</h6>
            </div>
            <div class="card-body">
                <div class="chart-bar">
                <canvas id="dpd"></canvas>
                </div>
                <hr>Descriptione opo iki?
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-xl-12 col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Pemilihan Legislatif DPR RI</h6>
            </div>
            <div class="card-body">
                <div class="chart-bar">
                <canvas id="dprri"></canvas>
                </div>
                <hr>Descriptione opo iki?
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-xl-12 col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Pemilihan Legislatif DPRD Provinsi</h6>
            </div>
            <div class="card-body">
                <div class="chart-bar">
                <canvas id="dprdprovinsi"></canvas>
                </div>
                <hr>Descriptione opo iki?
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-xl-12 col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Pemilihan Legislatif DPRD Kabupaten/Kota</h6>
            </div>
            <div class="card-body">
                <div class="chart-bar">
                <canvas id="dprdkab"></canvas>
                </div>
                <hr>Descriptione opo iki?
            </div>
        </div>
    </div>
</div>

@endsection
