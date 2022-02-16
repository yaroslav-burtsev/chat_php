@extends('layouts.app')
@section('head-block')
<title>Chat</title>
@endsection
@section('content')
<h1>Chatting</h1>
<a href='/contacts'>Find Contacts</a>
@isset($loginContacts)
<form action='{{ route("chatroom") }}' method='POST'>
    @csrf

    <div>
        @foreach($loginContacts as $contact)
            <label>{{ $contact }}</label>
            <input type='radio' name = 'contact' value='{{ $contact }}' }}/>
            <br/>
        @endforeach
    </div>

    <button type='submit'>Start chat</button>
</form>
@endisset
@endsection