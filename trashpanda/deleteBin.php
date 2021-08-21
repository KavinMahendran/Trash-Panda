<?php

session_start();//start session

//get the user id and store it in the variable
if(isset($_GET['BID'])){	
$BID=$_GET['BID'];	
}



	
//include database connection	
include('inc/dbConn.php');

//sql query
 $sql="DELETE FROM bin WHERE BID ='$BID'"	;

//storing the result in variable
	$result=mysqli_query($conn,$sql);



//display alert message according to the result	
	if($result){
	
	
	
	header('location:bin.php');	
		
		
	}else{
		?>

		<script>
				alert("Something went wrong");
				//window.location="users.php";
        </script>
		
	<?php	
	}
	
	
	
	
	
//close database connection
mysqli_close($conn);
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	











?>