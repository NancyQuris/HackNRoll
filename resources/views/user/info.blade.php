@extends('style')

@section('title') {{$user->name}} @endsection

@section('content') 
	<li>Name: {{$user->name}}</li>
	<li>Email: {{$user->email}}</li>
	<li>Type: Something</li>
	@if($user == auth()->user())
		<a href="/users/{{$user->id}}/edit">edit</a><br>
	@endif
	<br>
	<a href="/">Home</a><br>
	<a href="/aboutUs">About us</a><br>
	<a href="/users">All</a>
@endsection