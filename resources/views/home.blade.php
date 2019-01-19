@extends('layouts.app')

@section('content')

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/css/home.css">

  <!-- Logo -->
  <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
    <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity"><?php echo strtoupper(auth()->user()->name."'s") ?> <span class="w3-hide-small">HOME</span> PAGE</span>
    </div>
  </div>

  <!-- Container (About Section) -->
  <div class="w3-content w3-container w3-padding-64" id="about">
    <h3 class="w3-center">ABOUT ME</h3>
    
    <div class="w3-row">
      <div class="w3-col m6 w3-center w3-padding-large">
        <img src="/css/self-photo.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="500" height="333">
      </div>

      <!-- Hide this text on small devices -->
      <div class="w3-col m6 w3-hide-small w3-padding-large">
        
        @if(auth()->user()->self_introduction)
          {!!auth()->user()->self_introduction!!}
        @else
          {{auth()->user()->name." hasn't written his/her introduction"}}
        @endif
      </div>
    </div>
    <p class="w3-large w3-center w3-padding-16">Personality analysis:</p>
    @if(!auth()->user()->iPct)
    <div style="text-align:center">You haven't take personality test yet. Please take it through the <a href='/testform' style="color:blue">link</a> here.</div>
    
    @else
    <p class="w3-wide">I</p>
    <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:{{auth()->user()->iPct*100}}%">{{auth()->user()->iPct*100}}%</div>
    </div>
    <p class="w3-wide">N</p>
    <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:{{auth()->user()->nPct*100}}%">{{auth()->user()->nPct*100}}%</div>
    </div>
    <p class="w3-wide">F</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:{{auth()->user()->fPct*100}}%">{{auth()->user()->fPct*100}}%</div>
    </div>
    <p class="w3-wide">J</p>
    <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:{{auth()->user()->jPct*100}}%">{{auth()->user()->jPct*100}}%</div>
    </div>
    @endif
  </div>

  <!-- Footer -->
  <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
    <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
    <div class="w3-xlarge w3-section">
      <i class="fa fa-facebook-official w3-hover-opacity"></i>
      <i class="fa fa-instagram w3-hover-opacity"></i>
      <i class="fa fa-snapchat w3-hover-opacity"></i>
      <i class="fa fa-pinterest-p w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>

@endsection

