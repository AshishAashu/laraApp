<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
class signupController extends Controller
{
    public function signupSubmit(Request $req){
        $this->validate($req,[
            'firstname'=>'required',
            'lastname'=>'required',
            'useremail'=>'required',
            'usermob'=>'required',
            'userpass'=>'required',
            'userconpass'=>'required'
        ]);
        $msg = new users;
        $msg->firstname = $req->input('firstname');
        $msg->lastname = $req->input('lastname');
        $msg->useremail = $req->input('useremail');
        $msg->usermob = $req->input('usermob');
        $msg->userpass = $req->input('userpass');
        $msg->save();
        return redirect('/')->with('success','user signup successful..');
    }

}
