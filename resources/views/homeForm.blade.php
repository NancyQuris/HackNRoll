@extends('layouts.app')

@section('title', 'Home page for new user')

@section('content')

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/css/home.css">

  <div class = "container">
    <br>
    <li><a href=''> Click to upload background picture</a></li>
    <br>
    <li><a href=''> Click to upload profile photo</a></li>
    <br>
    <li><a href="/testform">Click to start to discover your personality type!</a></li>
    <br>
   
      <div>

       <li>Write your self_introduction below</li>
       <form method="POST" actions="/homeForm">
          @csrf
          <br>
          <input type="textarea" name="self_introduction" class = "form-control" placeholder="self_introduction" >
          <br >
          <button type="submit" class = "btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
    <p class="w3-large w3-center w3-padding-16">Personality analysis:</p>
    <a href="/user/testForm">start to discover your persoanlity!</a>
    </div>
  </div>

@endsection

