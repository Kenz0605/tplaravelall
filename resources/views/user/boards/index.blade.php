@extends('layouts.app')

@section('title', "User's boards")

@section('content')
    <p>Il faut parcourir toutes les boards</p>
    @foreach ($boards as $board)
        <p>This is your board {{$board->title}}</p>
        <p>{{$board->description}}</p>

    @endforeach
@endsection
