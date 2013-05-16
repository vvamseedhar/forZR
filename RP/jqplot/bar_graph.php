
<!DOCTYPE html>
<html>
	<head>
		<title>Line Charts and Options</title>	
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.jqplot.js"></script>			
		<script type="text/javascript" src="js/jqplot.canvasTextRenderer.min.js"></script>		
		<script type="text/javascript" src="js/jqplot.canvasAxisLabelRenderer.min.js"></script>
		<script type="text/javascript" src="js/jqplot.canvasAxisTickRenderer.min.js"></script>
		<script type="text/javascript" src="js/jqplot.categoryAxisRenderer.min.js"></script>
		<script type="text/javascript" src="js/jqplot.barRenderer.min.js"></script>				
	</head>
	<body>
            <?php include("getData.php");?>
            <?php echo $data;?>
		<script type="text/javascript"> 
			$(document).ready(function(){
				//var line2 = [['rajendra',15],['madhu',20],['mohan',25],['mohagn',5]];
				var line2 = <?php echo $data; ?>;
	            var plot2 = $.jqplot('chart4', [line2], {
					    series:[{renderer:$.jqplot.BarRenderer}],
					    axes: {
					      xaxis: {
					        renderer: $.jqplot.CategoryAxisRenderer
					      }
					    }
					  });		  	
			});		 
		</script>
		<div id="chart4" style="height:400px; width:500px;">
        </div>
	</body>
</html>