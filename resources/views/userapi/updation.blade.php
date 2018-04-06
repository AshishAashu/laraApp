@extends('layouts.home')

@section("title")
    User Login
@endsection


@section("content")
   {{Session::get('user_token')}}
    @include('forms.updationform')
@endsection

