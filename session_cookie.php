<?php

  /* setCookie("curiousit", "farhad", time()+30);*/

   session_start();

  

?>

<?php 
   
     $_SESSION['name'] = "frahad";

     echo session_id();     

?> 



