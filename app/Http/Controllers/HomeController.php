<?php

namespace App\Http\Controllers;

use App\SSP2BookingX;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(SSP2BookingX $ssp2BookingX)
    {
        resolve('SSP2BookingX')->setUrl('home');
        // dd($ssp2BookingX);
        return view('home');
    }
}
