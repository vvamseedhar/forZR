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
		  
		  /* Task Data */
		  $movie1 = "[['2013-05-05',40], ['2013-05-06',65], ['2013-05-07',57], ['2013-05-08',90], ['2013-05-09',82]]";
		  $movie2 = "[['2013-05-05',90], ['2013-05-06',40], ['2013-05-07',20], ['2013-05-08',70], ['2013-05-09',75]]";
		  $movie3 = "[['2013-05-05',60], ['2013-05-06',90], ['2013-05-07',50], ['2013-05-08',60], ['2013-05-09',20]]"; 
		  
	/*	$sql2 = mysql_query("SELECT * FROM movieprofits where movie_id=1");
		$count2 = mysql_num_rows($sql2);
		  $dataset3 = "[";
		  while ($row = mysql_fetch_assoc($sql2)) 
        {
        	if( $i< $count2) {
	            $dataset4 = $dataset3."["."'".$row["date"]."'".",".$row['profit']."],";
	            $dataset3 = $dataset4;
	            $i++;
        	}
        	else{
        		$dataset4 = $dataset3."["."'".$row["date"]."'".",".$row['profit']."]";
	            $dataset3 = $dataset4;
        	}
        }
        $movie1 = $dataset3."]";
        
        */
?>