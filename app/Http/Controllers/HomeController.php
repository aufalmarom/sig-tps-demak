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
        $suara_presiden = SuaraPresiden::get();
        $suara_dpd = SuaraDPD::max('suara');
        $dpd_terbanyak = SuaraDPD::where('suara', $suara_dpd)->first();
        $suara_dpr_ri = SuaraDPRRI::max('suara');
        $dpr_ri_terbanyak = SuaraDPRRI::where('suara', $suara_dpr_ri)->first();
        $suara_dprd_provinsi = SuaraDPRDProvinsi::max('suara');
        $dprd_provinsi_terbanyak = SuaraDPRDProvinsi::where('suara', $suara_dprd_provinsi)->first();
        $suara_dprd_kab = SuaraDPRDKab::max('suara');
        $dprd_kab_terbanyak = SuaraDPRDKab::where('suara', $suara_dprd_kab)->first();

        return view('/home', compact('suara_presiden', 'dpd_terbanyak','suara_dpd', 'suara_dpr_ri', 'dpr_ri_terbanyak', 'suara_dprd_provinsi', 'dprd_provinsi_terbanyak', 'suara_dprd_kab', 'dprd_kab_terbanyak'));
    }
}
