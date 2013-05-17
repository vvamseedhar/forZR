<!DOCTYPE html>
<html>
	<head>
		<title>Line Charts and Options</title>	
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.jqplot.js"></script>				
		<script type="text/javascript" src="js/jqplot.highlighter.min.js"></script>		
		<script type="text/javascript" src="js/jqplot.cursor.min.js"></script>		
		<script type="text/javascript" src="js/jqplot.dateAxisRenderer.min.js"></script>
		<script type="text/javascript" src="js/jqplot.ohlcRenderer.min.js"></script>	
	</head>
	<body>
	<?php include("getData.php");?>
		<script type="text/javascript"> 
			$(document).ready(function(){
			  ohlc = <?php echo $ohlc; ?>;
			  var plot1 = $.jqplot('chart1',[ohlc],{
			    seriesDefaults:{yaxis:'y2axis'},
			    axes: {
			      xaxis: {
			        renderer:$.jqplot.DateAxisRenderer,
			        tickOptions:{formatString:'%b %e'},
			        min: "09-01-2008 16:00",
			        max: "06-22-2009 16:00",
			        tickInterval: "6 weeks",
			      },
			      y2axis: {
			        tickOptions:{formatString:'$%d'}
			      }
			    },
			    series: [{renderer:$.jqplot.OHLCRenderer,rendererOptions:{ candleStick:true}}],
			    highlighter: {
			      show: true,
			      showMarker:true,
			      yvalues: 4,
			      formatString:'<table> \
			      <tr><td>date:</td><td>%s</td></tr> \
			      <tr><td>open:</td><td>%s</td></tr> \
			      <tr><td>hi:</td><td>%s</td></tr> \
			      <tr><td>low:</td><td>%s</td></tr> \
			      <tr><td>close:</td><td>%s</td></tr></table>'
			    }
			  });
			     
			});
		</script>
		<div id="chart1" style="height:400px; width:500px;">
        </div>
	</body>
</html>

