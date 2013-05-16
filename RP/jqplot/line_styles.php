<!--	   Drawing multiple graphs
		   Defing properties for graph lines 
		   Defining axes labels properties
--> 
<html>
	<head>
		<title>Line Charts and Options</title>	
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.jqplot.js"></script>
		<script type="text/javascript" src="js//jqplot.canvasTextRenderer.min.js"></script>
		<script type="text/javascript" src="js/jqplot.canvasAxisLabelRenderer.min.js"></script>	
	</head>
	<body>
		<?php include("getData.php");?>
			<script type="text/javascript"> 		
			$(document).ready(function(){
			var cosPoints = <?php echo $cosPoints; ?>;
			var sinPoints = <?php echo $sinPoints; ?>;
			var powPoints1 = <?php echo $powPoints1; ?>;
			var powPoints2 = <?php echo $powPoints2; ?>;
			  var plot1 = $.jqplot('chart1', [cosPoints, sinPoints, powPoints1, powPoints2],
			    {
			      title:'Line Style Options',
			      series:[
			          {
			            lineWidth:2,
			            markerOptions: { style:'dimaond' }
			          },
			          {
			            showLine:false,
			            markerOptions: { size: 7, style:"x" }
			          },
			          {
			            markerOptions: { style:"circle" }
			          },
			          {
			            lineWidth:5,
			            markerOptions: { style:"filledSquare", size:10 }
			          }
			      ],
			      axes:{
			        xaxis:{
			          label:'Angle(radians)',
			          labelRenderer: $.jqplot.CanvasAxisLabelRenderer,
			          labelOptions: {
			            fontFamily: 'Georgia, Serif',
			            fontSize: '12pt',
			            angle : 30
			          }
			        },
			        yaxis:{
			          label:'Values',
			          labelRenderer: $.jqplot.CanvasAxisLabelRenderer,
			          labelOptions: {
			            fontFamily: 'Georgia, Serif',
			            fontSize: '12pt'
			          }
			        }
			      }
			    }
			  );
			    
			});
		</script>
		<div id="chart1" style="height:300px; width:500px;">
        </div>
	</body>
</html>
	

