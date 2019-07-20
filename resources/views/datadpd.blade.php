@extends('dashboard')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Data Pemilu Legislatif</h1>
</div>

<div class="card shadow mb-4">
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">DPD</h6>
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
                <th class="text-center">Abdul Kholik, SH., M.Si</th>
                <th class="text-center">Agus Mujayanto</th>
                <th class="text-center">Dr. H. Bambang Sadono, SH.,MH</th>
                <th class="text-center">Ir. H. Bambang Sutrisno., MM</th>
                <th class="text-center">Budi Yuwono, SH</th>
                <th class="text-center">Casytha A. Kathmandu, SE</th>
                <th class="text-center">Dr. H.Darwito, SE., MM</th>
                <th class="text-center">Denty Eka Widi Pratiwi, SE., MH</th>
                <th class="text-center">G.K.R. Ayu Koes Indriyah</th>
                <th class="text-center">Isnan Ahmad Juhardani, S.P</th>
                <th class="text-center">Drs. H. Jamun, M.Pd.I</th>
                <th class="text-center">Drs. Joko J. Prihatmoko, M.Si</th>
                <th class="text-center">Kholison, SH</th>
                <th class="text-center">Drs. M. Abdul Rohim</th>
                <th class="text-center">H. Muh Mahsun, S.IP</th>
                <th class="text-center">Drs. H. Muhtar Lutfi, MM</th>
                <th class="text-center">Mujiburrohman, S.S</th>
                <th class="text-center">Dr. KH. Muqoddam Cholil, MA</th>
                <th class="text-center">H. Naibul Umam Eko Sakti, S.Ag., M.Si</th>
                <th class="text-center">Solehin, S.Pd, MM</th>
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
                <td class="text-center">{{$data->abdul_kholik}}</td>
                <td class="text-center">{{$data->agus_mujayanto}}</td>
                <td class="text-center">{{$data->bambang_sadono}}</td>
                <td class="text-center">{{$data->bambang_sutrisno}}</td>
                <td class="text-center">{{$data->budi_yuwono}}</td>
                <td class="text-center">{{$data->casytha_kathmandu}}</td>
                <td class="text-center">{{$data->darwito}}</td>
                <td class="text-center">{{$data->denty_eka}}</td>
                <td class="text-center">{{$data->ayu_koes}}</td>
                <td class="text-center">{{$data->isnan_ahmad}}</td>
                <td class="text-center">{{$data->jamun}}</td>
                <td class="text-center">{{$data->joko_prihatmoko}}</td>
                <td class="text-center">{{$data->kholison}}</td>
                <td class="text-center">{{$data->abdul_rohim}}</td>
                <td class="text-center">{{$data->muh_mahsun}}</td>
                <td class="text-center">{{$data->muhtar_lutfi}}</td>
                <td class="text-center">{{$data->mujiburrohman}}</td>
                <td class="text-center">{{$data->muqoddam_cholil}}</td>
                <td class="text-center">{{$data->naibul_umam}}</td>
                <td class="text-center">{{$data->solehin}}</td>
                <td class="text-center">
                    <a href="{{route('datadpd.detail', $data->id)}}" class="btn btn-sm btn-info btn-circle"><i class="fas fa-info-circle"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
</div>

@endsection
