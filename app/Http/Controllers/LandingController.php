<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        // nanti ambil dari database, sementara statis
        return view('landing');
    }
}