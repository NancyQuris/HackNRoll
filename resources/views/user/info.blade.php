@extends('layouts.app')

@section('title') {{$user->name}} @endsection

@section('content') 
<div class = "container">
	<li>Name: {{$user->name}}</li>
	<li>Email: {{$user->email}}</li>
	<li>Self_introduction: {!!$user->self_introduction!!}</li>
	@if($user == auth()->user())
		<button class="btn btn-primary"><a href="/users/{{$user->id}}/edit">edit</a></button><br>
	
	@endif
</div>
@endsection