<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class infController extends Controller
{
    public function beritaKSI()
    {
        return view('inf.beritaKSI');
    }
    public function profileKelulusanKSI()
    {
        return view('inf.profileKelulusanKSI');
    }
    public function profileDosen()
    {
        return view('inf.profileDosen');
    }
    public function home()
    {
        return view('inf.home');
    }

}