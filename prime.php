<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <form method="post">
    	<input type="number" name="number" value="number">
        <input type="submit" name="submit" value="submit">
    </form>

</body>
</html> -->

<?php 


// by taking input
/*if(isset($_POST['submit'])){
	$num = $_POST['number'];
	$num2 = 0;
	for($i=2; $i<$num; $i++){
		if($num % $i == 0){
			$num2 = 1;
			break;
		}
		
	}

	if($num2 == 0){
	    echo "The entered number is prime";
    } else{
	    echo "The entered number is not prime";
    }
}*/


    // print and count total number 
	$count = 0;
	
	for($i=2; $i<50; $i++){
	    $num = 0;
	    for($j=2;$j<$i;$j++){
	    	if($i%$j == 0){
	    		$num=1;
	    	}
	    }

	    if($num == 0){
	    	echo $i.", ";
	    	$count++;
	    }	
		
	}

    echo "<br>";
	echo "the total prime number in 100 is ".$count;


	

	


?>