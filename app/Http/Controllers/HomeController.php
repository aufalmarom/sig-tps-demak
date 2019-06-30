<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function ReadLandingPage()
    {
        return view('/landingpage');
    }
    
    public function ReadDashboard()
    {
        return view('/home');
    }
}
