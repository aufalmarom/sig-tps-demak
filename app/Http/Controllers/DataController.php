<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function ReadDataPilpres()
    {
        return view('/datapilpres');
    }
    
    public function ReadDataDPDRI()
    {
        return view('datadpdri');
    }

    public function ReadDataDPRRI()
    {
        return view('datadprri');
    }

    public function ReadDataDPRDProvinsi()
    {
        return view('datadprdprovinsi');
    }

    public function ReadDataDPRDKabupaten()
    {
        return view('datadprdkabupaten');
    }
}
