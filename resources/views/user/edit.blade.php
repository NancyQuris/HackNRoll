@extends('style')

@section('title', 'edit profile')

@section('content')
	<form method="POST" action="/users/{{$user->id}}">
		{{method_field('PATCH')}}
		{{ csrf_field() }}
		<div>
			<input type="text" name="name" value="{{$user->name}}">
		</div>
		<div>
			<input type="text" name="email" value="{{$user->email}}">
		</div>
		<div>
			<button type="submit">make changes</button>
		</div>
	</form>
@endsection