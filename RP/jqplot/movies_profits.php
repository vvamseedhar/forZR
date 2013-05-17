<!DOCTYPE html>
<html>
	<head>
		<title>Line Charts and Options</title>	
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.jqplot.js"></script>
		<script type="text/javascript" src="js/jqplot.dateAxisRenderer.min.js"></script>
		<script type="text/javascript" src="js/jqplot.canvasTextRenderer.min.js"></script>
		<script type="text/javascript" src="js/jqplot.canvasAxisTickRenderer.min.js"></script>
		<script type="text/javascript" src="js/jqplot.cursor.min.js"></script>
		<script type="text/javascript" src="js/jqplot.highlighter.min.js"></script>			
		<link rel="stylesheet" type="text/css" href="css/graphstyles.css">
			
	</head>
	<body>
        <?php include("getData.php");?>
		<script type="text/javascript"> 
			$(document).ready(function(){
			  var line1=<?php echo $movie1;?>;
			  var line2=<?php echo $movie2;?>;
			  var line3=<?php echo $movie3;?>;
			  var plot2 = $.jqplot('chart1', [line1,line2,line3], {
			      title:'Movies Vs Profit',
			      axesDefaults: {
				        tickRenderer: $.jqplot.CanvasAxisTickRenderer ,
				        tickOptions: {
				          fontSize: '10pt'
				        }
				    },
			      axes:{
			        xaxis:{
			          label:'Movies',
			          renderer:$.jqplot.DateAxisRenderer,
			          tickOptions:{formatString:'%b %#d, %y'},
			          min:'May 5,2013',
			          tickInterval:'1 day'
			        },
			        yaxis:{
			          label:'Profit',
			          tickOptions:{
			            formatString:'$%.2f'
			            }
			        }
			      },
			      series:[
			          {
			            lineWidth:2,
			            label: 'Greekuveerudu',
			            markerOptions: { style:'dimaond' }
			          },
			          {
			            label: 'Tadakha',
			            markerOptions: { size: 7, style:"x" }
			          },
			          {
			          	label: 'Josh',
			            markerOptions: { style:"circle" }
			          }
			      ],
			      legend : {show : true, placement: 'outsideGrid'},
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
		<div id="chart1" style="height:350px; width:900px;">
        </div>
	</body>
</html>