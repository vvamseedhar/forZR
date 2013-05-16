<?php
	
	$connect = mysql_connect('localhost','root','');
	$select = mysql_select_db('zingreelbeta-cake',$connect);
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
     print_r($dataset1."]");
?>