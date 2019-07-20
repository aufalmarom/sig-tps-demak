@extends('dashboard')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Data DPD</h1>
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
    
    <h5><b>Suara Abdul Kholik, SH., M.Si</b></h5>
    <p>{{$data->abdul_kholik}}</p>
    <br>

    <h5><b>Suara Agus Mujayanto</b></h5>
    <p>{{$data->agus_mujayanto}}</p>
    <br>

    <h5><b>Suara Dr. H. Bambang Sadono, SH.,MH</b></h5>
    <p>{{$data->bambang_sadono}}</p>
    <br>

    <h5><b>Suara Ir. H. Bambang Sutrisno., MM</b></h5>
    <p>{{$data->bambang_sutrisno}}</p>
    <br>
    
    <h5><b>Suara Budi Yuwono, SH</b></h5>
    <p>{{$data->budi_yuwono}}</p>

    <h5><b>Suara Casytha A. Kathmandu, SE</b></h5>
    <p>{{$data->casytha_kathmandu}}</p>
    <br>

    <h5><b>Suara Dr. H.Darwito, SE., MM</b></h5>
    <p>{{$data->darwito}}</p>
    <br>

    <h5><b>Suara Denty Eka Widi Pratiwi, SE., MH</b></h5>
    <p>{{$data->denty_eka}}</p>
    <br>

    <h5><b>Suara G.K.R. Ayu Koes Indriyah</b></h5>
    <p>{{$data->ayu_koes}}</p>
    <br>

    <h5><b>Suara Isnan Ahmad Juhardani, S.P</b></h5>
    <p>{{$data->isnan_ahmad}}</p>
    <br>

    <h5><b>Suara Drs. H. Jamun, M.Pd.I</b></h5>
    <p>{{$data->jamun}}</p>
    <br>

    <h5><b>Suara Drs. Joko J. Prihatmoko, M.Si</b></h5>
    <p>{{$data->joko_prihatmoko}}</p>
    <br>

    <h5><b>Suara Kholison, SH</b></h5>
    <p>{{$data->kholison}}</p>
    <br>

    <h5><b>Suara Drs. M. Abdul Rohim</b></h5>
    <p>{{$data->abdul_rohim}}</p>
    <br>

    <h5><b>Suara H. Muh Mahsun, S.IP</b></h5>
    <p>{{$data->muh_mahsun}}</p>
    <br>
    <h5><b>Suara Drs. H. Muhtar Lutfi, MM</b></h5>
    <p>{{$data->muhtar_lutfi}}</p>
    <br>

    <h5><b>Suara Mujiburrohman, S.S</b></h5>
    <p>{{$data->mujiburrohman}}</p>
    <br>

    <h5><b>Suara Dr. KH. Muqoddam Cholil, MA</b></h5>
    <p>{{$data->muqoddam_cholil}}</p>
    <br>

    <h5><b>Suara H. Naibul Umam Eko Sakti, S.Ag., M.Si</b></h5>
    <p>{{$data->naibul_umam}}</p>
    <br>

    <h5><b>Suara Solehin, S.Pd, MM</b></h5>
    <p>{{$data->solehin}}</p>
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
