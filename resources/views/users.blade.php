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
                </tr>
            </thead>
            <tbody>
                @foreach($users as $usr)
                    <tr>
                        <td class="text-center">{{$usr->id}}</td>
                        <td class="text-center">{{$usr->firstname." ".$usr->lastname}}</td>
                        <td class="text-center">{{$usr->useremail}}</td>
                        <td class="text-center">{{$usr->usermob}}</td>
                    </tr>    
                @endforeach
            </tbody>
        </table>
    </div>
@endsection