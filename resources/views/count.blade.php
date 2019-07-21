@extends('dashboard')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Recap Datas</h1>
</div>

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

@endsection
