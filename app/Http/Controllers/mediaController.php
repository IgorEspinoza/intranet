<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class mediaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        echo ('cdadministrativos');
        echo ('cdcajeras');
        echo ('cdaseadores');
        echo ('cdconductoresauxiliares');
        echo ('cdgerenciajefaturas');
        echo ('cdpersonalmantenimiento');
        return view('includes.panel.cargaDatos');
    }
}