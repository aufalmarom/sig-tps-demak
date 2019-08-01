<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\SuaraPresiden;
use App\Model\SuaraDPD;
use App\Model\SuaraDPRRI;
use App\Model\SuaraDPRDProvinsi;
use App\Model\SuaraDPRDKab;

class HomeController extends Controller
{

    public function ReadLandingPage()
    {
        return view('/landingpage');
    }
    
    public function ReadDashboard()
    {
        $data_suara_presiden = SuaraPresiden::get();
        $sum_suara_presiden = SuaraPresiden::sum('suara')/100;
        $suara_presiden = SuaraPresiden::max('suara');
        $presiden_terbanyak = SuaraPresiden::where('suara', $suara_presiden)->first();
        $data_suara_dpd = SuaraDPD::get();
        $sum_suara_dpd = SuaraDPD::sum('suara')/100;
        $suara_dpd = SuaraDPD::max('suara');
        $dpd_terbanyak = SuaraDPD::where('suara', $suara_dpd)->first();
        $data_suara_dpr_ri = SuaraDPRRI::get();
        $sum_suara_dpr_ri = SuaraDPRRI::sum('suara')/100;
        $suara_dpr_ri = SuaraDPRRI::max('suara');
        $dpr_ri_terbanyak = SuaraDPRRI::where('suara', $suara_dpr_ri)->first();
        $data_suara_dprd_provinsi = SuaraDPRDProvinsi::get();
        $sum_suara_dprd_provinsi = SuaraDPRDProvinsi::sum('suara')/100;
        $suara_dprd_provinsi = SuaraDPRDProvinsi::max('suara');
        $dprd_provinsi_terbanyak = SuaraDPRDProvinsi::where('suara', $suara_dprd_provinsi)->first();
        $data_suara_dprd_kab = SuaraDPRDKab::get();
        $sum_suara_dprd_kab = SuaraDPRDKab::sum('suara')/100;
        $suara_dprd_kab = SuaraDPRDKab::max('suara');
        $dprd_kab_terbanyak = SuaraDPRDKab::where('suara', $suara_dprd_kab)->first();

        return view('/home', compact('data_suara_presiden', 'sum_suara_presiden', 'sum_suara_dpd','data_suara_dpd', 'data_suara_dpr_ri', 'sum_suara_dpr_ri', 'data_suara_dprd_provinsi', 'sum_suara_dprd_provinsi', 'data_suara_dprd_kab', 'sum_suara_dprd_kab', 'suara_presiden', 'presiden_terbanyak', 'dpd_terbanyak','suara_dpd', 'suara_dpr_ri', 'dpr_ri_terbanyak', 'suara_dprd_provinsi', 'dprd_provinsi_terbanyak', 'suara_dprd_kab', 'dprd_kab_terbanyak'));
    }

    public function ReadMaps()
    {
        return view('maps');
    }
    public function ReadCount()
    {
        $suara_presiden = SuaraPresiden::max('suara');
        $presiden_terbanyak = SuaraPresiden::where('suara', $suara_presiden)->first();
        $suara_dpd = SuaraDPD::max('suara');
        $dpd_terbanyak = SuaraDPD::where('suara', $suara_dpd)->first();
        $suara_dpr_ri = SuaraDPRRI::max('suara');
        $dpr_ri_terbanyak = SuaraDPRRI::where('suara', $suara_dpr_ri)->first();
        $suara_dprd_provinsi = SuaraDPRDProvinsi::max('suara');
        $dprd_provinsi_terbanyak = SuaraDPRDProvinsi::where('suara', $suara_dprd_provinsi)->first();
        $suara_dprd_kab = SuaraDPRDKab::max('suara');
        $dprd_kab_terbanyak = SuaraDPRDKab::where('suara', $suara_dprd_kab)->first();

        return view('/count', compact('suara_presiden', 'presiden_terbanyak', 'dpd_terbanyak','suara_dpd', 'suara_dpr_ri', 'dpr_ri_terbanyak', 'suara_dprd_provinsi', 'dprd_provinsi_terbanyak', 'suara_dprd_kab', 'dprd_kab_terbanyak'));
    }

    public function ReadAbout()
    {
        return view ('about');
    }
    public function ReadBar()
    {
        return view('bar');
    }
    public function ReadPie()
    {
        return view('pie');
    }
}
