@extends('dashboard')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Data DPR RI</h1>
</div>

<div class="card shadow mb-4">
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Desa/Kelurahan {{$data->desa}} - TPS {{$data->tps}}</h6>
</div>
<div class="card-body">
    <h5><b>Desa/Kelurahan</b></h5>
    <p>{{$data->desa}}</p>
    <br>
    
    <h5><b>TPS</b></h5>
    <p>{{$data->tps}}</p>
    <br>

    <h5><b>Desa/Kelurahan</b></h5>
    <p>{{$data->desa}}</p>
    <br>

    <h5><b>Alamat</b></h5>
    <p>{{$data->alamat}}</p>
    <br>

    <h5><b>Pemilih Terdaftar</b></h5>
    <p>{{$data->pemilih_terdaftar}}</p>
    <br>

    <h5><b>Pengguna Hak Pilih</b></h5>
    <p>{{$data->pengguna_hak_pilih}}</p>
    <br>

    <h5><b>Suara </b></h5>
    <p></p>
    <br>

    <h5><b>Suara Tidak Sah</b></h5>
    <p>{{$data->tidak_sah}}</p>
    <br>

    <h5><b>Location(x, y)</b></h5>
    <p>({{$data->x}}, {{$data->y}})</p>
    <br>
    
</div>
</div>

@endsection
