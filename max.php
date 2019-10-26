<?php 


    $arr = array(45,67,56,58,39);
    $large = $arr[0];

	for($i=1; $i<count($arr); $i++){
	    if($arr[$i] > $large){
	   	  	$large = $arr[$i];
	         
	   	  	  
	   	}
	    
	}
	echo "max value is ".$large;
 

   /*$arr = array(45,67,56,58,39);
   $small = $arr[0];

	for($i=1; $i<count($arr); $i++){
	    if($arr[$i] < $small){
	   	  	$small = $arr[$i];
	         
	   	  	  
	   	}
	    
	}
	echo "min value is ".$small;*/
   


?>