<!DOCTYPE html>
<html>
	<head>
		<title>Line Charts and Options</title>	
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.jqplot.js"></script>					
		<script type="text/javascript" src="js/jqplot.bubbleRenderer.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/graphstyles.css">	
	</head>
	<body>
	<?php include("getData.php");?>
		<script type="text/javascript"> 
			$(document).ready(function(){ 
			    var arr = [[11, 123, 1236, "Acura"], [45, 92, 1067, "Alfa Romeo"],
			    [24, 104, 1176, "AM General"]];			     
			    var plot1 = $.jqplot('chart1',[arr]	,{
			        title: 'Bubble Chart with Gradient Fills',
			        seriesDefaults:{
			            renderer: $.jqplot.BubbleRenderer,
			            rendererOptions: {
			                bubbleGradients: true
			            },
			            shadow: true
			        }
			    });
			});
		</script>
		<div id="info3"></div>
		<div id="chart1" style="height:300px; width:500px;"></div>
		
	</body>
</html>
	

