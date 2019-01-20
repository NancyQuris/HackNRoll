  @extends('layouts.app')

  @section('content')

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/home.css">

    <!-- Logo -->
    <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
      <img src=<?php echo '/backgrounds/'.$user->name.'.jpg'?> alt="My background">
      <div class="w3-display-middle" style="white-space:nowrap;">
      <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity"><?php echo strtoupper($user->name."'s") ?> <span class="w3-hide-small">HOME</span> PAGE</span>
      </div>
    </div>

    <!-- Container (About Section) -->
    <div class="w3-content w3-container w3-padding-64" id="about">
      <h3 class="w3-center">ABOUT ME</h3>
      
      <div class="w3-row">
        <div class="w3-col m6 w3-center w3-padding-large">
          <img src=<?php echo '/photos/'.$user->name.'.jpg'?> class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="500" height="333">
        </div>

        <!-- Hide this text on small devices -->
        <div class="w3-col m6 w3-hide-small w3-padding-large">
          
          @if($user->self_introduction)
            {!!$user->self_introduction!!}
          @else
            {{$user->name." hasn't written his/her introduction"}}
          @endif
        </div>
      </div>
      <p class="w3-large w3-center w3-padding-16">Personality analysis:</p>
      @if(auth()->user()==$user&&!$user->iPct)
      <div style="text-align:center">You haven't taken personality test yet. Please take it through the <a href='/testform' style="color:blue">link</a> here.</div>
      
      @elseif(auth()->user()!=$user&&!$user->iPct)
      <div style="text-align:center">{{$user}} hasn't taken personality test yet. </div>
      
      @else
      <div class = "container">
      <div id="piechart" style="margin-left:25%;margin-right:25%"></div>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      
      <script type="text/javascript">
      // Load google charts
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      // Draw the chart and set the chart values
      function drawChart() {
          var i = <?php echo $user->iPct?>;
          var n = <?php echo $user->nPct?>;
          var f = <?php echo $user->fPct?>;
          var j = <?php echo $user->jPct?>;
          var data = google.visualization.arrayToDataTable([
          ['Personality Type', 'point'],
          ['I', i],
          ['N', n],
          ['F', f],
          ['J', j],
      ]);

      // Optional; add a title and set the width and height of the chart
      var options = {'title':'Personality Analysis Result', 'width':550, 'height':400};

      // Display the chart inside the <div> element with id="piechart"
      var chart = new google.visualization.PieChart(document.getElementById('piechart'));
      chart.draw(data, options);
      }
      </script>
      @endif
    </div>
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

