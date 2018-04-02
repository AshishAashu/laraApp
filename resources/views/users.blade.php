@extends('layouts/home')
@section('title')
    Registered Users
@endsection

@section('content')
    <h1 class="text-info text-center" >Registered Users</h1>
    <hr style="border-bottom: 2px solid #3d3d3d;width:50%;">
    <div class="table-responsive">
        <table class="table" style="background: white; font-size: 1.6em;">
            <thead >
                <tr class="info">
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $usr)
                    <tr>
                        <td>{{$usr->id}}</td>
                        <td>{{$usr->firstname." ".$usr->lastname}}</td>
                        <td>{{$usr->useremail}}</td>
                        <td>{{$usr->usermob}}</td>
                    </tr>    
                @endforeach
            </tbody>
        </table>
    </div>
@endsection