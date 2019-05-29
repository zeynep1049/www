



<?php
$connect = mysqli_connect("localhost", "root", "", "starbucks");
$query = "SELECT * FROM starbucks_kds";
$result = mysqli_query($connect, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ ilce:'".$row["ilce"]."',gelir_tutari:'".$row["gelir_tutari"]."', maliyet_tutari:".$row["maliyet_tutari"]."},  ";
}
$chart_data = substr($chart_data, 0, -2);
?>
 
 
<!DOCTYPE html>
<html>
 <head>
  <title>Starbucks Istanbul Bolge Grafikleri </title>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  
 </head>
 <body background="off.jpg" text="white" >
  <br /><br />
  <div class="container" style="width:900px;">
   <h2 align="center">STARBUCKS GELIR VE MALIYET ANALIZI</h2>
   <h3 align="center">Aylik Grafik</h3>   
   <br /><br />
   <div id="chart"></div>
  </div>
 </body>
</html>
 
<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 lineColors:['#000000','#000000','#000000'],
 pointStrokeColors: ['black'],
 xkey:['ilce'],
 ykeys:['maliyet_tutari'],
 zkeys:['gelir_tutari'],
 labels:['maliyet','','gelir'],
 hideHover:'auto',
 stacked:true
});
</script>



<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link href="Content/Site.css" rel="stylesheet" type="text/css" />
    <title>STARBUCKS KAR GRAFIGI</title>
    <script type="text/javascript">
    
        var arrVisitors = new Array();
        arrVisitors[0] = "Kadikoy, 450000";
        arrVisitors[1] = "Taksim, 521000";
        arrVisitors[2] = "Beyoglu, 289000";
        arrVisitors[3] = "Uskudar, 400000";
        arrVisitors[4] = "Tophane, 120000";
        arrVisitors[5] = "Historia, 212000";
        arrVisitors[6] = "Bayrampasa, 220000";
        arrVisitors[7] = "Eminonu, 130000";
		arrVisitors[8] = "Istiklal, 318000";
		arrVisitors[9] = "Bebek, 565000";
		arrVisitors[10] = "Levent, 518000";
 
        var canvas;
        var context;
        var cWidth, cHeight, cMargin, cSpace;
        var cMarginSpace, cMarginHeight;
        
        var bWidth, bMargin, totalBars, maxDataValue;
        var bWidthMargin;
        
        var ctr, numctr, speed;
        
        var totLabelsOnYAxis;
 
 
       
        function barChart() {
            canvas = document.getElementById('bchart');
            if (canvas && canvas.getContext) {
                context = canvas.getContext('2d');
            }
 
            chartSettings();
            drawAxisLabelMarkers();
            drawChartWithAnimation();
        }
 
       
        function chartSettings() {
            
            cMargin = 25;
            cSpace = 60;
            cHeight = canvas.height - 2 * cMargin - cSpace;
            cWidth = canvas.width - 2 * cMargin - cSpace;
            cMarginSpace = cMargin + cSpace;
            cMarginHeight = cMargin + cHeight;
            
            bMargin = 15;
            totalBars = arrVisitors.length;
            bWidth = (cWidth / totalBars) - bMargin;
 
 
            
            maxDataValue = 0;
            for (var i = 0; i < totalBars; i++) {
                var arrVal = arrVisitors[i].split(",");
                var barVal = parseInt(arrVal[1]);
                if (parseInt(barVal) > parseInt(maxDataValue))
                    maxDataValue = barVal;
            }
 
            totLabelsOnYAxis = 10;
            context.font = "10pt Garamond Fontu kullanıldı";
 
            
            ctr = 0;
            numctr = 100;
            speed = 10;
        }
 
        
        function drawAxisLabelMarkers() {
            context.lineWidth = "2.0";
            
            drawAxis(cMarginSpace, cMarginHeight, cMarginSpace, cMargin);
            
            drawAxis(cMarginSpace, cMarginHeight, cMarginSpace + cWidth, cMarginHeight);
            context.lineWidth = "1.0";
            drawMarkers();
        }
 
       
        function drawAxis(x, y, X, Y) {
            context.beginPath();
            context.moveTo(x, y);
            context.lineTo(X, Y);
            context.closePath();
            context.stroke();
        }
 
        
        function drawMarkers() {
            var numMarkers = parseInt(maxDataValue / totLabelsOnYAxis);
            context.textAlign = "right";
            context.fillStyle = "white"; ;
 
            
            for (var i = 0; i <= totLabelsOnYAxis; i++) {
                markerVal = i * numMarkers;
                markerValHt = i * numMarkers * cHeight;
                var xMarkers = cMarginSpace - 5;
                var yMarkers = cMarginHeight - (markerValHt / maxDataValue);
                context.fillText(markerVal, xMarkers, yMarkers, cSpace);
            }
 
            
            context.textAlign = 'center';
            for (var i = 0; i < totalBars; i++) {
                arrval = arrVisitors[i].split(",");
                name = arrval[0];
 
                markerXPos = cMarginSpace + bMargin + (i * (bWidth + bMargin)) + (bWidth / 2);
                markerYPos = cMarginHeight + 10;
                context.fillText(name, markerXPos, markerYPos, bWidth);
            }
 
            context.save();
 
            
            context.translate(cMargin + 10, cHeight / 2);
            context.rotate(Math.PI * -90 / 180);
            context.fillText("KAR", 0, 0);
 
            context.restore();
 
            
            context.fillText('SUBELER', cMarginSpace + (cWidth / 2), cMarginHeight + 30);
        }
 
        function drawChartWithAnimation() {
            
            for (var i = 0; i < totalBars; i++) {
                var arrVal = arrVisitors[i].split(",");
                bVal = parseInt(arrVal[1]);
                bHt = (bVal * cHeight / maxDataValue) / numctr * ctr;
                bX = cMarginSpace + (i * (bWidth + bMargin)) + bMargin;
                bY = cMarginHeight - bHt - 2;
                drawRectangle(bX, bY, bWidth, bHt, true);
            }
 
            
  
            if (ctr < numctr) {
                ctr = ctr + 1;
                setTimeout(arguments.callee, speed);
            }
        }
 

        function drawRectangle(x, y, w, h, fill) {
            context.beginPath();
            context.rect(x, y, w, h);
            context.closePath();
            context.stroke();
 
            if (fill) {
                var gradient = context.createLinearGradient(0, 0, 0, 300);
                gradient.addColorStop(0, 'yellow'); 
                gradient.addColorStop(1, 'rgba(18,89,199,0.4)');
                context.fillStyle = gradient;
                context.strokeStyle = gradient;
                context.fill();
            }
        }
 
 
       
    </script>
    
</head>
<body onload="barChart();">
    <div id="body">
        <section class="featured">
            <div class="content-wrapper">
                <hgroup class="title">
                    <h1>
                        KAR GRAFIGI</h1>
                </hgroup>
                <p>
                   
                </p>
            </div>
        </section>
        <section class="content-wrapper main-content clear-fix">
            <canvas id="bchart" height="400" width="600">
   Tarayıcı HTML Canvas özelliğini desteklemiyor. </canvas>
        </section>
    </div>
</body>
</html>


  
