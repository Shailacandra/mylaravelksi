<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginRegisterController extends Controller
{
    public function login(){
        return view('auth.login');    
    }
    
    public function register(){         
        return view('auth.register');    
    } 

    public function userHome(){
        return view('user.home');    
    }
    
    public function adminhome(){         
        return view('admin.home');    
    } 

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
}