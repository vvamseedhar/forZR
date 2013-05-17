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
			    var s1 = [200, 600, 700, 1000];
			    var s2 = [460, -210, 690, 820];
			    var s3 = [-260, -440, 320, 200];
			    var ticks = ['May', 'June', 'July', 'August'];			     
			    var plot1 = $.jqplot('chart1', [s1, s2, s3], {
			        seriesDefaults:{
			            renderer:$.jqplot.BarRenderer,
			            rendererOptions: {fillToZero: true}
			        },
			        legend: {
			            show: true,
			            placement: 'outsideGrid'
			        },
			        axes: {
			            xaxis: {
			                renderer: $.jqplot.CategoryAxisRenderer,
			                ticks: ticks
			            },
			            yaxis: {
			                tickOptions: {formatString: '$%d'}
			            }
			        }
			    });
			});
		</script>
		<div id="chart1" style="height:300px; width:500px;">
        </div>
	</body>
</html>
	

