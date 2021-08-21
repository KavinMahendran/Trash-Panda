<?php

session_start();//start session

//get the user id and store it in the variable
if(isset($_GET['UID'])){	
$UID=$_GET['UID'];	
}



	
//include database connection	
include('inc/dbConn.php');

//sql query
 $sql="DELETE FROM user WHERE UID ='$UID'"	;

//storing the result in variable
	$result=mysqli_query($conn,$sql);



//display alert message according to the result	
	if($result){
	
	
	
	header('location:user.php');	
		
		
	}else{
		?>

		<script>
				alert("Something went wrong");
				//window.location="user.php";
        </script>
		
	<?php	
	}
	
	
	
	
	
//close database connection
mysqli_close($conn);
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	











?>