@extends('dashboard')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Data Pemilu Legislatif</h1>
</div>

<div class="card shadow mb-4">
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">DPRD Kabupaten/Kota</h6>
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
                <th class="text-center">Partai Kebangkitan Bangsa (PKB)</th>
                <th class="text-center">Partai Gerakan Indonesia Raya (Gerindra)</th>
                <th class="text-center">Partai Demokrasi Indonesia Perjuangan</th>
                <th class="text-center">Partai Golongan Karya (Golkar)</th>
                <th class="text-center">Partai Nasdem</th>
                <th class="text-center">Partai Gerakan Perubahan Indonesia (Garuda)</th>
                <th class="text-center">Partai Berkarya</th>
                <th class="text-center">Partai Keadilan Sejahtera (PKS)</th>
                <th class="text-center">Partai Persatuan Indonesia</th>
                <th class="text-center">Partai Persatuan Pembangunan</th>
                <th class="text-center">Partai Solidaritas Indonesia (PSI)</th>
                <th class="text-center">Partai Amanat Nasional (PAN)</th>
                <th class="text-center">Partai Hati Nurani Rakyat (Hanura)</th>
                <th class="text-center">Partai Demokrat</th>
                <th class="text-center">Partai Bulan Bintang</th>
                <th class="text-center">Partai Keadilan dan Persatuan Indonesia (PKPI)</th>
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
                <td class="text-center">{{$data->kebangkitan_bangsa}}</td>
                <td class="text-center">{{$data->gerakan_indonesia}}</td>
                <td class="text-center">{{$data->demokrasi_indonesia_perjuangan}}</td>
                <td class="text-center">{{$data->golongan_karya}}</td>
                <td class="text-center">{{$data->nasdem}}</td>
                <td class="text-center">{{$data->gerakan_perubahan_indonesia}}</td>
                <td class="text-center">{{$data->berkarya}}</td>
                <td class="text-center">{{$data->keadilan_sejahtera}}</td>
                <td class="text-center">{{$data->persatuan_indonesia}}</td>
                <td class="text-center">{{$data->persatuan_pembangunan}}</td>
                <td class="text-center">{{$data->solidaritas_indonesia}}</td>
                <td class="text-center">{{$data->amanat_nasional}}</td>
                <td class="text-center">{{$data->hati_nurani_rakyat}}</td>
                <td class="text-center">{{$data->demokrat}}</td>
                <td class="text-center">{{$data->bulan_bintang}}</td>
                <td class="text-center">{{$data->keadilan_persatuan_indonesia}}</td>
                <td class="text-center">
                    <a href="{{route('datadprdkabupaten.detail', $data->id)}}" class="btn btn-sm btn-info btn-circle"><i class="fas fa-info-circle"></i></a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>

@endsection
