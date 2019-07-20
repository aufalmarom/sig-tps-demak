<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Presiden;
use App\Model\DPD;
use App\Model\DPRRI;
use App\Model\DPRDProvinsi;
use App\Model\DPRDKab;

class DataController extends Controller
{
    public function ReadDataPilpres()
    {
        $datas = Presiden::get();
        return view('/datapilpres', compact('datas'));
    }

    public function DetailDataPilpres($id)
    {
        $data = Presiden::find($id);
        return view('/detaildatapilpres', compact('data'));
    }
    
    public function ReadDataDPD()
    {
        $datas = DPD::get();
        return view('/datadpd', compact('datas'));
    }

    public function DetailDataDPD($id)
    {
        $data = DPD::find($id);
        return view('/detaildatadpd', compact('data'));
    }

    public function ReadDataDPRRI()
    {
        $datas = DPRRI::get();
        return view('datadprri', compact('datas'));
    }

    public function DetailDataDPRRI($id)
    {
        $data = DPRRI::find($id);
        return view('detaildatadprri', compact('data'));
    }

    public function ReadDataDPRDProvinsi()
    {
        $datas = DPRDProvinsi::get();
        return view('datadprdprovinsi', compact('datas'));
    }

    public function DetailDataDPRDProvinsi($id)
    {
        $data = DPRDProvinsi::find($id);
        return view('detaildatadprdprovinsi', compact('data'));
    }

    public function ReadDataDPRDKabupaten()
    {
        $datas = DPRDKab::get();
        return view('datadprdkabupaten', compact('datas'));
    }
    public function DetailDataDPRDKabupaten($id)
    {
        $data = DPRDKab::find($id);
        return view('detaildatadprdkabupaten', compact('data'));
    }
}
