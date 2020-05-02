<?php

$num= $_POST['qnum'];
$connect=mysqli_connect("localhost","root","","test");
$query = "SELECT A_votes,B_votes,C_votes,D_votes  FROM test where q_num=$num";  
$result = mysqli_query($connect, $query);
$output=mysqli_fetch_Assoc($result);
//var_dump($result);
?>

<html>
  <head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
                ["Options","votes",{ role: 'style' }],
                ["A",<?php echo "$output[A_votes]" ?>," color:silver"],
                ["B",<?php echo "$output[B_votes]" ?>,'color:gold'],
                ["C",<?php echo "$output[C_votes]" ?>,'color:cyan'],
                ["D",<?php echo "$output[D_votes]" ?>,'color:blue'],
                         
        ]);

        var options = {
          chart: {
            title: 'Votes Gained',
            
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
  </body>
</html>