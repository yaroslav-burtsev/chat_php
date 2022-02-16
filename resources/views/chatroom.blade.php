@extends('layouts.app')
@section('head-block')
<title>Chatroom</title>
@endsection
@section('content')
<h1>Chatroom with {{ $contact }} </h1>
<form action='{{ route("chatroom-send") }}' method='POST'>
    @csrf

    <input type='text' name='message'/>
    <input type='hidden' name='contact' value='{{ $contact }}'/>
    <button type='submit'>Send</button>
</form>

<br/>

@isset($messages)
@foreach($messages as $message)
    @if($message[0] == $currentLogin)
        <label style='background-color: darkgrey; border: solid darkblue;'>{{ $message[0] }}</label>
        <label style='background-color: purple; border: solid darkblue;'>{{ $message[2] }}</label>
    @else
        <label style='background-color: green; border: solid darkblue;'>{{$message[0] }}</label>    
        <label style='background-color: purple; border: solid darkblue;'>{{ $message[2] }}</label>
    @endif
    <br/>
    <br/>

@endforeach
@endisset

@endsection