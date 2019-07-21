@extends('dashboard')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

<!-- Content Row -->

<div class="row justify-content-center">
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Suara Pilpres Terbanyak: {{$presiden_terbanyak->paslon}}</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$presiden_terbanyak->suara}} Suara</div>
            </div>
            <div class="col-auto">
                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
<div class="row">
    <!-- Pending Requests Card Example -->
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Suara Terbanyak - Pileg DPD : {{$dpd_terbanyak->caleg}}</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$suara_dpd}} Suara</div>
            </div>
            <div class="col-auto">
                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Suara Terbanyak - Pileg DPR RI : {{$dpr_ri_terbanyak->partai}}</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$suara_dpr_ri}} Suara</div>
            </div>
            <div class="col-auto">
                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>

<div class="row">
    <!-- Pending Requests Card Example -->
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Suara Terbanyak - Pileg DPRD Provinsi : {{$dprd_provinsi_terbanyak->partai}}</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$suara_dprd_provinsi}} Suara</div>
            </div>
            <div class="col-auto">
                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Suara Terbanyak - Pileg DPRD Kabupaten/Kota : {{$dprd_kab_terbanyak->partai}}</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$suara_dprd_kab}} Suara</div>
            </div>
            <div class="col-auto">
                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-6 col-lg-6">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pemilihan Umum Presiden</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
            <div class="chart-pie pt-4">
                <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                        <div class="">
                        </div>
                    </div>
                    <div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <canvas id="pie-pilpres" width="285" height="253" class="chartjs-render-monitor" style="display: block; width: 285px; height: 253px;"></canvas>
            </div>
            <hr>Descriptione opo iki?
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pemilihan Legislatif - DPD</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
            <div class="chart-pie pt-4">
                <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                        <div class="">
                        </div>
                    </div>
                    <div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <canvas id="pie-pileg-dpd" width="285" height="253" class="chartjs-render-monitor" style="display: block; width: 285px; height: 253px;"></canvas>
            </div>
            <hr>Descriptione opo iki?
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-4 col-lg-4">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pemilihan Legislatif DPR RI</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
            <div class="chart-pie pt-4">
                <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                        <div class="">
                        </div>
                    </div>
                    <div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <canvas id="pie-pileg-dprri" width="285" height="253" class="chartjs-render-monitor" style="display: block; width: 285px; height: 253px;"></canvas>
            </div>
            <hr>Descriptione opo iki?
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-4">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pemilihan Legislatif - DPRD Provinsi </h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
            <div class="chart-pie pt-4">
                <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                        <div class="">
                        </div>
                    </div>
                    <div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <canvas id="pie-pileg-dprdprovinsi" width="285" height="253" class="chartjs-render-monitor" style="display: block; width: 285px; height: 253px;"></canvas>
            </div>
            <hr>Descriptione opo iki?
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-4">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pemilihan Legislatif - DPRD Kabupaten/Kota</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
            <div class="chart-pie pt-4">
                <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                        <div class="">
                        </div>
                    </div>
                    <div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <canvas id="pie-pileg-dprdkab" width="285" height="253" class="chartjs-render-monitor" style="display: block; width: 285px; height: 253px;"></canvas>
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
                <h6 class="m-0 font-weight-bold text-primary">Pemilihan Umum Presiden</h6>
            </div>
            <div class="card-body">
                <div class="chart-bar">
                <canvas id="myBarChart"></canvas>
                </div>
                <hr>Descriptione opo iki?
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-12 col-lg-12">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Data Maps</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <iframe width="100%" height="520" frameborder="0" src="https://rizqiur.carto.com/builder/e7ab25ea-af82-4422-9f03-890f560a5dae/embed" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
        </div>
    </div>
    </div>
</div>
@endsection
