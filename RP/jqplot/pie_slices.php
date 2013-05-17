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
			  var data = <?php echo $highlighting;?> ;
			  var plot1 = jQuery.jqplot ('chart1', [data],
			    {
			      seriesDefaults: {
			        renderer: jQuery.jqplot.PieRenderer,
			        rendererOptions: {
			          showDataLabels: true,
			          fill: false,
			          sliceMargin: 4,
          			  lineWidth: 5
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