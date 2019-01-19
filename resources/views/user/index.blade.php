@extends('layouts.app')

@section('title', 'user infomation')

@section('content')
<div class = "container">
	<h1>Users</h1>
	@if(count($users)>0)
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
	@else
		<h3>No other users</h3>
	@endif
</div>
@endsection