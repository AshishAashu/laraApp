@extends('layouts/home')
@section('title')
    Registered Users
@endsection

@section('content')
    <h1 class="text-info">Registered Users Are:</h1>
    <div class="table-responsive">
        <table class="table">
            <thead class="">
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $usr)
                    <tr>
                        <td>{{$usr->id}}</td>
                        <td>{{$usr->firstname}}</td>
                        <td>{{$usr->lastname}}</td>
                        <td>{{$usr->useremail}}</td>
                        <td>{{$usr->usermob}}</td>
                    </tr>    
                @endforeach
            </tbody>
        </table>
    </div>
@endsection