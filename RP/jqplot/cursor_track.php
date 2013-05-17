<!DOCTYPE html>
<html>
	<head>
		<title>Line Charts and Options</title>	
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.jqplot.js"></script>			
		<script type="text/javascript" src="js/jqplot.canvasTextRenderer.min.js"></script>		
		<script type="text/javascript" src="js/jqplot.canvasAxisLabelRenderer.min.js"></script>
		<script type="text/javascript" src="js/jqplot.dateAxisRenderer.min.js"></script>
		<script type="text/javascript" src="js/jqplot.canvasAxisTickRenderer.min.js"></script>
		<script type="text/javascript" src="js/jqplot.categoryAxisRenderer.min.js"></script>
		<script type="text/javascript" src="js/jqplot.barRenderer.min.js"></script>		
		<script type="text/javascript" src="js/jqplot.highlighter.min.js"></script>		
		<script type="text/javascript" src="js/jqplot.cursor.min.js"></script>		
		<script type="text/javascript" src="js/jqplot.dateAxisRenderer.min.js"></script>		
	</head>
	<body>
	<?php include("getData.php");?>
		<script type="text/javascript"> 
			$(document).ready(function(){
			 var line1 = <?php echo $highlighting; ?>;
				  
				  var plot2 = $.jqplot('chart1', [line1], {
				  	/*bar chart for first one and to use x2, y2 axes for second one */ 
				    
				    axesDefaults: {
				        tickRenderer: $.jqplot.CanvasAxisTickRenderer,
				        tickOptions: {
				          angle: 30
				        }
				    },
				    axes: 	{
				      xaxis: {
				        renderer: $.jqplot.CategoryAxisRenderer
				      }
				    },
					highlighter: {
				        show: true,
				        sizeAdjust: 7.5
			      	},
			      	cursor: {
			        	show: true,
     					tooltipLocation:'sw'
			     	}
				  });
			});
		</script>
		<div id="chart1" style="height:400px; width:500px;">
        </div>
	</body>
</html>

