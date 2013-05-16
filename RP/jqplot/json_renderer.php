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
	</head>
	<body>
		<script type="text/javascript"> 
				$(document).ready(function(){
		  var ajaxDataRenderer = function(url, plot, options) {
		    var ret = null;
		    $.ajax({
		      async: false,
		      url: url,
		      dataType:"json",
		      success: function(data) {
		        ret = data;
		      }
		    });
		    return ret;
		  };
		  var jsonurl = "jsondata.txt";
		  var plot2 = $.jqplot('chart6', jsonurl,{
		    title: "AJAX JSON Data Renderer",
		    dataRenderer: ajaxDataRenderer
		  });
		});
		</script>
		<div id="chart6" style="height:400px; width:500px;">
        </div>
	</body>
</html>
