
<!--  </<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
     <input type="number" name="number">
     <input type="submit" name="submit" value="submit">
 </body>
 </html>   -->

<?php
 
/* if(isset($_POST['submit'])){
 	$number = $_POST['number'];
    */
    
function fact($number) { 

    if ($number < 2) { 
        return 1; 
    } else { 
        return ($number * fact($number-1)); 
    } 
}

echo fact(3);


 

?>