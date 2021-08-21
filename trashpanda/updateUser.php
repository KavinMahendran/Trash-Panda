<?php

session_start();//start session

//store the retrived values in variables
if(isset($_POST['UID'])){	
$UID=$_POST['UID'];	
}

if(isset($_POST['name'])){	
$name=$_POST['name'];	
}

if(isset($_POST['email'])){	
$email=$_POST['email'];	
}

if(isset($_POST['contact'])){	
$contact=$_POST['contact'];	
}


	
//include database connections	
include('inc/dbConn.php');


  $sql="update user set name='$name' ,email='$email', contact='$contact' WHERE UID='$UID'"	;


	$result=mysqli_query($conn,$sql);



	
	if($result){
	?>
	<script>
				alert("Successfully Updated");
				window.location="user.php";
        </script>
	
	
	<?php	
		
	}else{
		?>

		<script>
				alert("Something went wrong");
				//window.location="user.php";
        </script>
		
	<?php	
	}
	
	
	
	
	

mysqli_close($conn);
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	











?>