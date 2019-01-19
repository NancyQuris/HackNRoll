@extends('layouts.app')

@section('title', 'edit profile')

@section('content')
<div class = "container">
	{!! Form::open(['action'=>'UserController@update','method'=>"POST"])!!}
	{{-- <form method="POST" action="/users/{{$user->id}}"> --}}
		{{method_field('PATCH')}}
		{{ csrf_field() }}
		<div>
		    {{Form::label('Current Name','{{$user->name}}')}}
			<input type="text" name="name" placeholder="New Name" value='{{$user->name}}>
		</div>
		<div>
		    <div name = "oldEmail">Current email: {{$user->email}}</div>
			<input type="text" name="email" placeholder="New Email" value>
		</div>
		<div>
				<div name = "oldSelfIntro">Current self-introduction: {{$user->self_introduction}}</div>
				<input type="text" name="intro" placeholder="New intro">
			</div>
		<div>
			<button type="submit">make changes</button>
		</div>
	{{-- </form> --}}
	{{!!Form::close()!!}}
</div>
@endsection