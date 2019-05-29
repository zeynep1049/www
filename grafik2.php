
  
  
  <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script background="deneme.jpg"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Taksim Meydan',     11],
          ['Beyoglu',      6],
          ['Uskudar',  5],
          ['Kadikoy', 8],
          ['Bayrampasa',    7],
		  ['Bebek',    14],
		  ['Levent',    12]
        ]);

        var options = {
          title: 'Starbucks Performans Analizi', 
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body >
    <div id="piechart_3d" style="width: 900px; height: 500px;" background="logo.jpg"></div>
  </body>
</html>

  <body background="logo.jpg">
    <div id="map_markers_div" style="width: 400px; height: 300px"></div>
  </body>
</html>




<html>
  <head>
     <h3> DUNYADAKI STARBUCKS SUBE SAYILARI </h3></center>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script background="deneme.jpg"></script>
    <script type="text/javascript">
      google.charts.load('current', {
        'packages':['geochart'],
        
        'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
      });
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
          ['Country', 'Popularity'],
          ['Turkey', 478],
          ['United Kingdom', 1002],
          ['Germany', 157],
          ['Spain', 126],
          ['France', 154],
          ['RU', 124],
		  ['Ireland', 80],
		  ['Netherlands', 74],
		  ['Poland', 65],
		  ['Switzerland', 7],
		  ['Romania', 37],
		  ['United States', 14758],
		  ['China', 3684],
		  ['Canada', 1542],
		  ['Japan', 1415],
		  ['Mexico', 715],
		  ['India', 132],
		  ['Austria', 19],
		  ['Italy', 3],
		  ['Monaco', 2],
		  ['Norway', 23],
		  ['Sweden', 14]
		  
		  
		  

        ]);

        var options = {};
		
		

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="regions_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>