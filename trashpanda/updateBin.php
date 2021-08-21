<?php

session_start();//start session

//store the retrived values in variables
if(isset($_POST['BID'])){	
$BID=$_POST['BID'];	
}

if(isset($_POST['capacity'])){	
$capacity=$_POST['capacity'];	
}

if(isset($_POST['BLID'])){	
$BLID=$_POST['BLID'];	
}


	
//include database connections	
include('inc/dbConn.php');


  $sql="update bin set capacity='$capacity' ,BLID='$BLID' WHERE BID='$BID'"	;


	$result=mysqli_query($conn,$sql);



	
	if($result){
	?>
	<script>
				alert("Successfully Updated");
				window.location="bin.php";
        </script>
	
	
	<?php	
		
	}else{
		?>

		<script>
				alert("Something went wrong");
				//window.location="users.php";
        </script>
		
	<?php	
	}
	
	
	
	
	

mysqli_close($conn);
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	











?>