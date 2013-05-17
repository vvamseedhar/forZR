<!DOCTYPE html>
<html>
	<head>
		<title>Line Charts and Options</title>	
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.jqplot.js"></script>					
		<script type="text/javascript" src="js/jqplot.barRenderer.min.js"></script>
		<script type="text/javascript" src="js/jqplot.categoryAxisRenderer.min.js"></script>
		<script type="text/javascript" src="js/jqplot.pointLabels.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/graphstyles.css">	
	</head>
	<body>
	<?php include("getData.php");?>
		<script type="text/javascript"> 
			$(document).ready(function(){
			  var s1 = [2, 6, 7, 10];
			  var s2 = [7, 5, 3, 4];
			  var s3 = [14, 9, 3, 8];
			  plot3 = $.jqplot('chart1', [s1, s2, s3], {
			    stackSeries: true,
			    seriesDefaults:{
			      renderer:$.jqplot.BarRenderer,
			      rendererOptions: {
			          barMargin: 30
			      },
			      pointLabels: {show: true}
			    },
			    axes: {
			      xaxis: {
			          renderer: $.jqplot.CategoryAxisRenderer
			      }
			    }     
			  });
			  $('#chart1').bind('jqplotDataClick',
			    function (ev, seriesIndex, pointIndex, data) {
			      $('#info3').html('series: '+seriesIndex+', point: '+pointIndex+', data: '+data);
			    }
			  );
			});
		</script>
		<div id="info3"></div>
		<div id="chart1" style="height:300px; width:500px;"></div>
		
	</body>
</html>
	

