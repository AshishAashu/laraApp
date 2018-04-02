<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function getHome(){
        return view('index');
    }

    public function getSignup(){
        return view('signup');
    }

    public function getAbout(){
        return view('about');
    }

    
}
