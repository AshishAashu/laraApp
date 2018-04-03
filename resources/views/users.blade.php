@extends('layouts/home')
@section('title')
    Registered Users
@endsection

@section('content')
    <h1 class="text-info text-center" >Registered Users</h1>
    <hr style="border-bottom: 2px solid #3d3d3d;width:50%;">
    <div class="table-responsive">
        <table class="table " style="background: white; font-size: 1.7em;">
            <thead >
                <tr class="info">
                    <th class="text-center">Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Mobile</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $usr)
                    <tr>
                        <td class="text-center">{{$usr->id}}</td>
                        <td class="text-center">{{$usr->firstname." ".$usr->lastname}}</td>
                        <td class="text-center">{{$usr->useremail}}</td>
                        <td class="text-center">{{$usr->usermob}}</td>
                        <td class="text-center">
                            <button id="edit_{{$usr->id}}" onclick="call()" class="editbtn btn  btn-info" title="Edit info for user">
                                <i class="fa fa-pencil-square-o"></i>
                            </button>
                            <a  href="/user/del?id={{$usr->id}}">
                                <button class="btn  btn-danger" title="Delete User">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                            </a>
                        </td>    
                    </tr>    
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" onclick='$("#myModal").hide();'>
                        &times;
                    </button>
                </div>
                <div class="modal-body" style="height:300px;">
                    {!! Form::open(['url' => '/user/edit/submit']) !!}
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                {{Form::hidden('userid','',['id'=>'userid'])}}
                                {{Form::label('firstname','First Name : ',['class'=>'text-info text-lg'])}}
                                {{Form::text('firstname','',['id'=>'fname','class'=>'form-control input-lg','placeholder'=>'Enter Your First Name'])}}
                            </div>
                            <div class="form-group col-md-6">
                                {{Form::label('lastname','Last Name : ',['class'=>'text-info text-lg'])}}
                                {{Form::text('lastname','',['id'=>'lname','class'=>'form-control input-lg','placeholder'=>'Enter Your Last Name'])}}
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            {{Form::label('usermob','Mobile : ',['class'=>'text-info text-lg'])}}
                            {{Form::text('usermob','',['id'=>'mob','class'=>'form-control input-lg','placeholder'=>'Enter Your Mobile No'])}}
                        </div>
                        <div class="form-group col-md-12">
                            {{Form::submit('Edit',['class'=>'btn btn-lg btn-primary'])}}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    $("document").ready(function(){
        $('.editbtn').click(function(){
            var x = $(this).attr('id');
            var xarr = x.split('_');
            var btype = xarr[0];
            var id = xarr[1];
            var data = {'id': id};
            var u = "http://localhost:8000/user/getUser";
            $.ajax({
                url : u,
                type:'GET',
                data: data,
                success: function(res){
                    var obj = res;
                    $("#myModal #userid").val(obj["id"]);
                    $("#myModal #fname").val(obj["firstname"]);
                    $("#myModal #lname").val(obj["lastname"]);
                    $("#myModal #mob").val(obj["usermob"]);
                    $("#myModal").show();
                }
            });
        });
    });
@endsection