<?php

session_start();//start session

//get the user id and store it in the variable
if(isset($_GET['BLID'])){	
$BLID=$_GET['BLID'];	
}



	
//include database connection	
include('inc/dbConn.php');

//sql query
 $sql="DELETE FROM building WHERE BLID ='$BLID'"	;

//storing the result in variable
	$result=mysqli_query($conn,$sql);



//display alert message according to the result	
	if($result){
	
	
	
	header('location:building.php');	
		
		
	}else{
		?>

		<script>
				alert("Something went wrong");
				//window.location="building.php";
        </script>
		
	<?php	
	}
	
	
	
	
	
//close database connection
mysqli_close($conn);
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	











?>