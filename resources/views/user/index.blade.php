@extends('style')

@section('title', 'user infomation')

@section('content')
	@foreach($users as $user)
		<ul>
			<li>
				<font size="5">
					{{$user->name}} &nbsp;&nbsp;<a href="/users/{{$user->id}}">detail</a>
				</font>
				<font size="3">
					<ul>email: &nbsp;{{$user->email}}</ul>
				</font>
			</li>
		</ul>
	@endforeach
	<br>
	<a href="/">Home</a><br>
	<a href="/aboutUs">About us</a>
@endsection