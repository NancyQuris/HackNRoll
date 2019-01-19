@extends('layouts.app')

@section('title', 'edit profile')

@section('content')
<div class = "container">
	<br>
    <a href="/user/editBackground" style="color:#666"> Click to upload background picture</a>
	<br>
	<br>
	<a href="/user/editPhoto" style="color:#666"> Click to upload profile photo</a>
	<br>
	<br>
	{!!Form::open(['action'=>['UserController@update',$user],'method'=>'POST'])!!}
	{{-- <form method="POST" action="/users/{{$user->id}}"> --}}
		{{method_field('PATCH')}}
		{{ csrf_field() }}
		<div class = "form-group">
			{{Form::label('name','Name')}}
			{{Form::text('name',$user->name,['class'=>'form-control','placeholder'=>'name'])}}
		</div>
		<div class = "form-group">
			{{Form::label('email','Email')}}
			{{Form::text('email',$user->email,['class'=>'form-control','placeholder'=>'email'])}}
		</div>
		<div class = "form-group">
			{{Form::label('self_intro','Self_introduction')}}
			{{Form::textarea('self_introduction',$user->self_introduction,['id'=> 'article-ckeditor','class'=>'form-control','placeholder'=>'self_introduction'])}}		
		</div>
		{{Form::hidden('_method','PUT')}}
		{{Form::submit('Update',['class'=>'btn btn-primary'])}}
		{!!Form::close()!!}
</div>
@endsection