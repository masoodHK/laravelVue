@extends('default.app')

@section('title')
    <title>vlChat</title>
@endsection

@section('content')
    <h1>Chatroom</h1>
    <chat-log></chat-log>
    <chat-composer></chat-composer>
@endsection