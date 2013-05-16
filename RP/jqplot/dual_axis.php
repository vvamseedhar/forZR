<!--	   Drawing line and bar graphs 
		   Using dual axes 
		   Defining axes labels properties at once
--> 
<html>
	<head>
		<title>Line Charts and Options</title>	
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.jqplot.js"></script>
		<script type="text/javascript" src="js//jqplot.canvasTextRenderer.min.js"></script>
		<script type="text/javascript" src="js/jqplot.canvasAxisLabelRenderer.min.js"></script>
		<script type="text/javascript" src="js/jqplot.categoryAxisRenderer.min.js"></script>
		<script type="text/javascript" src="js/jqplot.barRenderer.min.js"></script>
		<script type="text/javascript" src="js/jqplot.canvasAxisTickRenderer.min.js"></script>	
	</head>
	<body>
	<?php include('getData.php'); ?>
		<script type="text/javascript"> 		
			$(document).ready(function(){
			  var line1 = <?php echo $dualAxes; ?>;
			 
			  var plot2 = $.jqplot('chart2', [line1, line2], {
			    series:[{renderer:$.jqplot.BarRenderer}, {xaxis:'x2axis', yaxis:'y2axis'}],
			    axesDefaults: {
			        tickRenderer: $.jqplot.CanvasAxisTickRenderer ,
			        tickOptions: {
			          angle: 30
			        }
			    },
			    axes: {
			      xaxis: {
			        renderer: $.jqplot.CategoryAxisRenderer
			      },
			      x2axis: {
			        renderer: $.jqplot.CategoryAxisRenderer
			      },
			      yaxis: {
			        autoscale:true
			      },
			      y2axis: {
			        autoscale:true
			      }
			    }
			  });
			});
		</script>
		<div id="chart2" style="height:300px; width:500px;">
        </div>
	</body>
</html>
	


