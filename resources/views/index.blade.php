@extends('layouts.app')
@section('head-block')
<title>Web Chat</title>
@endsection
@section('content')
    LaravelChat
    <div class='links'>
        <a href='{{ route("reg") }}' >Register</a>
        <br/>
        <a href='{{ route("login") }}'>Login</a>
    </div>
@endsection