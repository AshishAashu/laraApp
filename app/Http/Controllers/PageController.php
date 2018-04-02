<?php

namespace App\Http\Controllers;
use View;
use Illuminate\Http\Request;
use App\users;
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

    public function getUsers(){
        $users = users::all();
        return view::make('users')->with('users',$users);
    }
}
