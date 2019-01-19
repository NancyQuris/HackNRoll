@extends('layouts.app')

@section('content')
<div class = "container">
<div id="piechart" style = "float:left"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
    <script type="text/javascript">
    // Load google charts
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    // Draw the chart and set the chart values
    function drawChart() {
        var i = <?php echo $array[0]?>;
        var n = <?php echo $array[1]?>;
        var f = <?php echo $array[2]?>;
        var j = <?php echo $array[3]?>;
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
<div class = "container-right" style="margin-left:600px"><br><br><br><br><br><h3>There are xx users that share similar personalities with you.</h3></div>
    <div class = "clear" style = "clear:both">
    <br>
    <div class = "container-down">
        <li>I – Introversion preferred to extraversion: INFJs tend to be quiet and reserved. They generally prefer interacting with a few close friends rather than a wide circle of acquaintances, and they expend energy in social situations (whereas extraverts gain energy).
        </li>
        <li>N – iNtuition preferred to sensing: INFJs tend to be more abstract than concrete. They focus on the big picture rather than the details, and on future possibilities rather than immediate realities.
        </li>
        <li>F – Feeling preferred to thinking: INFJs tend to value personal considerations above objective criteria. When making decisions, they often give more weight to social implications than to logic.
        </li>
        <li>J – Judgment preferred to perception: INFJs tend to plan their activities and make decisions early. They derive a sense of control through predictability.
        </li>
    </div>
</div>
@endsection
