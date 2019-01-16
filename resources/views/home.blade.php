@extends('style')

@section('title', 'Who R U')

@section('content')
    <hi> hi {{ $name }}</hi>
    <p>U deserve Ur true self</p>
    <a href="/aboutUs">AboutUs</a><br>
    <a href="/users">find others</a>
@endsection

