<!DOCTYPE html>
<html>
	<head>
		<title>Line Charts and Options</title>	
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.jqplot.js"></script>					
		<script type="text/javascript" src="js/jqplot.pieRenderer.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/graphstyles.css">	
	</head>
	<body>
		<script type="text/javascript"> 
			$(document).ready(function(){
			  var data = [
			    ['rajendra', 12],['madhu', 9], ['manu', 14]];
			  var plot1 = jQuery.jqplot ('chart1', [data],
			    {
			      seriesDefaults: {
			        renderer: jQuery.jqplot.PieRenderer,
			        rendererOptions: {
			          showDataLabels: true
			        }
			      }
			    });
			});
		</script>
		<div id="chart1" style="height:300px; width:500px;">
        </div>
	</body>
</html>
	

