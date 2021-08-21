<?php

session_start();//start session

//store the retrived values in variables
if(isset($_POST['BLID'])){	
$BLID=$_POST['BLID'];	
}

if(isset($_POST['name'])){	
$name=$_POST['name'];	
}

if(isset($_POST['NOB'])){	
$NOB=$_POST['NOB'];	
}


	
//include database connections	
include('inc/dbConn.php');


  $sql="update building set name='$name' ,NOB='$NOB' WHERE BLID='$BLID'"	;


	$result=mysqli_query($conn,$sql);



	
	if($result){
	?>
	<script>
				alert("Successfully Updated");
				window.location="building.php";
        </script>
	
	
	<?php	
		
	}else{
		?>

		<script>
				alert("Something went wrong");
				//window.location="building.php";
        </script>
		
	<?php	
	}
	
	
	
	
	

mysqli_close($conn);
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	











?>