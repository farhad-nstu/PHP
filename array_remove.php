<?php 

   $arr = array(2,3,2,5,4,5,6,1,10);
   $arr2 = array();
   /*print_r($arr);*/

   foreach ($arr as $key => $value) {
   	   $arr2[$value] = $value;
   	   
   }

    echo "<pre>";
   	print_r($arr2);

?>