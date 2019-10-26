<?php 
function __toString()  
{  
return $this->text;  
}

$tweet = new Tweet(1, ‘hello world’);  
echo $tweet; // ‘hello world’

?>