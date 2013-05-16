<?php
	
	$connect = mysql_connect('localhost','root','');
	$select = mysql_select_db('checking',$connect);
    $sql = mysql_query("SELECT name,address FROM graph");
    $count = mysql_num_rows($sql);
    $i = 1;
  	$dataset1 = "[";
        while ($row = mysql_fetch_assoc($sql)) 
        {
        	if( $i< $count) {
	            $dataset2 = $dataset1."["."'".$row["name"]."'".",".$row['address']."],";
	            $dataset1 = $dataset2;
	            $i++;
        	}
        	else{
        		$dataset2 = $dataset1."["."'".$row["name"]."'".",".$row['address']."]";
	            $dataset1 = $dataset2;
        	}
        }
        $data = $dataset1."]";
        
    
      	  $cosPoints = "[[1,2],[3,4],[5,6]]";
		  $sinPoints = "[[3,2],[7,9],[4,6]]";
		  $powPoints1 = "[[1,7],[2,9],[3,5]]";
		  $powPoints2 = "[[3,5],[5,7],[7,9]]";	
		  
		  $dualAxes = "[['Cup Holder Pinion Bob', 7], ['Generic Fog Lamp', 9], ['HDTV Receiver', 15],
			  ['8 Track Control Module', 12], [' Sludge Pump Fourier Modulator', 3],
			  ['Transcender/Spice Rack', 6], ['Hair Spray Danger Indicator', 18]];
			  var line2 = [['Nickle', 28], ['Aluminum', 13], ['Xenon', 54], ['Silver', 47],
			  ['Sulfer', 16], ['Silicon', 14], ['Vanadium', 23]]";
		  $highlighting = "[['rajendra',5],['madhu',10],['manu',15]]";
     //print_r($dataset1."]");
?>