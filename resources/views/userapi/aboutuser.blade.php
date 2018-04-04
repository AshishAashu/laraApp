@extends('layouts.home')

@section("title")
    My Details
@endsection


@section("content")
   <div class="container table-responsive">
       @php
            $data = Session::get('data');
       @endphp

       <table class="table">
            <tr>
               <td>Id:</td>
               <td>{{$data->id}}</td>
           </tr>
           <tr>
               <td>Name:</td>
               <td>{{$data->name}}</td>
           </tr>
           <tr>
               <td>Email:</td>
               <td>{{$data->email}}</td>
           </tr>
           <tr>
               <td>Created At:</td>
               <td>{{$data->created_at}}</td>
           </tr>
       </table>
   </div>
@endsection

