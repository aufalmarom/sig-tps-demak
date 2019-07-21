@extends('dashboard')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Recap Datas</h1>
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

@endsection
