<?php

session_start();//start session

//create variables to store values
if(isset($_POST['BID'])){	
$BID=$_POST['BID'];	
}

if(isset($_POST['capacity'])){	
$capacity=$_POST['capacity'];	
}

if(isset($_POST['BLID'])){	
$BLID=$_POST['BLID'];	
}


	

	
	
//include database connection	
include('inc/dbConn.php');

//sql query
 $sql="INSERT INTO bin(BID,capacity,BLID) 
 VALUES('$BID','$capacity','$BLID')"	;

//store result 
	$result=mysqli_query($conn,$sql);



//display message according to results	
	if($result){
	
	
	
	header('location:bin.php');	
		
		
	}else{
		?>

		<script>
				alert("Something went wrong");
				window.location="bin.php";
        </script>
		
	<?php	
	}
	
	
	
	
	
//close database connection
mysqli_close($conn);
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	











?>