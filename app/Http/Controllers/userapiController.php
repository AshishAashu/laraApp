<?php

namespace App\Http\Controllers;
use View;
use Session;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\users;
class userapiController extends Controller
{
    //
    public function getLoginForm(){
        return view('/userapi/login');
    }

    public function getAboutUser(){
        return view('/userapi/aboutuser');
    }
    public function getLoggedin(Request $req){
        $client = new Client(['base_uri' => 'http://192.168.1.221/login-service/public/Api/v1/']);
        $response = $client->request('POST', 'login',
                                         ['form_params' => [
                                             'email' => $req->input("useremail"),
                                             'password'=> $req->input("userpass")]
                                        ]);
        $body =  $response->getBody();
        $body = json_decode($body);
        // echo $body->status;
        if($body->status == '1'){
            Session::put('user_token',$body->auth_token);
            //$value = session('key');
            $data = $body->data;
            Session::put('data',$data);
            return redirect('/userapi/aboutuser');
        }
        else{
            return redirect('/')->with('warning',$body->message);
        }
    }

    public function getRegistrationForm(){
        return view("/userapi/registration");
    }
    
    public function getRegistration(Request $req){
        $client = new Client(['base_uri' => 'http://192.168.1.221/login-service/public/Api/v1/']);
        $response = $client->request('POST', 'User/Add',
                                         ['form_params' => [
                                             'name' => $req->input('name'),
                                             'email' => $req->input("useremail"),
                                             'password'=> $req->input("userpass")]
                                        ]);
        $body =  $response->getBody();
        $body = json_decode($body);
        if($body->status == '1'){
            return redirect('/')->with('success',$body->message);
        }
    }

    public function getUpdationForm(Request $req){
        return view("/userapi/updation");
    }


    public function getUpdate(Request $req){
        $client = new Client(['base_uri' => 'http://192.168.1.221/login-service/public/Api/v1/']);
        $data = Session::get('data');
        $response = $client->request('PUT','User/Update',
                                    ['form_params'=>[
                                                'id'=>$data->id,
                                                'name'=>$req->input('name'),
                                                'email'=>$req->input("useremail"),
                                                'password'=>$req->input('userpass')
                                                ],
                                     'headers' => ['api-token'=>Session::get('user_token')],
                                    ]
                                );                        
        $body =  $response->getBody();
        $body = json_decode($body);
        if($body->status == '1'){
            $data->name = $req->input('name');
            $data->email = $req->input('useremail');
            Session::put('data',$data);
            return redirect('/')->with('success',$body->message);
        }else{
            return redirect('/')->with('warning',$body->message);
        }   
    }

    public function getDeleteUser(){
        $client = new Client(['base_uri' => 'http://192.168.1.221/login-service/public/Api/v1/']);
        $data = Session::get('data');
        $response = $client->request("DELETE","User/Delete/$data->id",
                                            [
                                             'headers'=>[
                                                 'api-token'=>Session::get('user_token')
                                             ]       
                                            ]);
        Session::flush();
        return redirect("/")->with('warning','user deleted');
    }
    
    public function getLogout(){
        Session::flush();
        return redirect("/");
    }
}
