<!DOCTYPE html>
<html>
	<head>
		<title>Line Charts and Options</title>	
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.jqplot.js"></script>					
		<script type="text/javascript" src="js/jqplot.pieRenderer.min.js"></script>		
		<script type="text/javascript" src="js/jqplot.donutRenderer.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/graphstyles.css">	
	</head>
	<body>
	<?php include("getData.php");?>
		<script type="text/javascript"> 
			$(document).ready(function(){
			  var s1 = <?php echo $s1;?> ;
			  var s2 = <?php echo $s2;?> ;
			   
			  var plot3 = $.jqplot('chart1', [s1, s2], {
			    seriesDefaults: {
			      renderer:$.jqplot.DonutRenderer,
			      rendererOptions:{
			      	fill: false,
			        sliceMargin: 3,
			        startAngle: 90,
			        showDataLabels: true,
			        dataLabels: 'value'
			      }
			    },
			    legend: { show:true, location: 'e' }
			  });
			});
		</script>
		<div id="chart1" style="height:300px; width:500px;">
        </div>
	</body>
</html>
	

