<?php

session_start();//start session

//create variables to store values
if(isset($_POST['BLID'])){	
$BLID=$_POST['BLID'];	
}

if(isset($_POST['NOB'])){	
$NOB=$_POST['NOB'];	
}


	

	
	
//include database connection	
include('inc/dbConn.php');

//sql query
 $sql="INSERT INTO building(BLID,name,NOB) 
 VALUES('$BLID','$name','$NOB')"	;

//store result 
	$result=mysqli_query($conn,$sql);



//display message according to results	
	if($result){
	
	
	
	header('location:building.php');	
		
		
	}else{
		?>

		<script>
				alert("Something went wrong");
				//window.location="bin.php";
        </script>
		
	<?php	
	}
	
	
	
	
	
//close database connection
mysqli_close($conn);
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	











?>