@extends('dashboard')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Data</h1>
</div>

<div class="card shadow mb-4">
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Pemilu Presiden</h6>
</div>
<div class="card-body">
    <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th class="text-center">No.</th>
            <th class="text-center" style="width:24%;">Desa/Kelurahan - TPS</th>
            <th class="text-center">Pemilih Terdaftar</th>
            <th class="text-center">Pengguna Hak Pilih</th>
            <th class="text-center">Suara Paslon 1</th>
            <th class="text-center">Suara Paslon 2</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
        @foreach ($datas as $data)
        <tr>
            <td class="text-center">{{$no++}}</td>
            <td class="text-center">{{$data->desa}} - {{$data->tps}}</td>
            <td class="text-center">{{$data->pemilih_terdaftar}}</td>
            <td class="text-center">{{$data->pengguna_hak_pilih}}</td>
            <td class="text-center">{{$data->paslon_1}}</td>
            <td class="text-center">{{$data->paslon_2}}</td>
            <td class="text-center">
                <a href="{{route('datapilpres.detail', $data->id)}}" class="btn btn-sm btn-info btn-circle"><i class="fas fa-info-circle"></i></a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
</div>
</div>

@endsection
