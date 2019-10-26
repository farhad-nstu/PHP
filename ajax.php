<form>
	 
	 <table>
	 	<tr>
	 		<td><input type="name" name="name" placeholder="name"></td>
	 	</tr>
	 	<tr>
	 		<td>
	 			<input type="text" name="email" placeholder="email">
	 		</td>

	 	</tr>
	 	<tr>
	 		<td>
	 			<input type="submit" name="submit" value="submit" onclick="jqueryform()">
	 		</td>
	 	</tr>
	 </table>

</form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">


      function jqueryform(){
        var name = $('#name').val();
	    var email = $('#email').val();
	    

	    $.ajax({
     	type: "POST",
     	url: "submitdata.php",
     	data:{

     		"user_name": name,
     		"user_email": email

     	},

     	success: function(response) { alert(response);
          
           if(response.trim() == 'SUCCESS'){
           	  $('#statusmsg').html('').html('successfully send');
           	  
           } else{
           	$('#statusmsg').html('').html('please try again');
           }


     	}
     });

}


</script>