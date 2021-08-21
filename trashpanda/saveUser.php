<?php

session_start();//start session

//create variables to store values
if(isset($_POST['UID'])){	
$UID=$_POST['UID'];	
}

if(isset($_POST['name'])){	
$name=$_POST['name'];	
}

if(isset($_POST['email'])){	
$email=$_POST['email'];	
}

if(isset($_POST['password'])){	
$password=$_POST['password'];	
}


	
if(isset($_POST['contact'])){	
$contact=$_POST['contact'];	
}

	
	
//include database connection	
include('inc/dbConn.php');

//sql query
 $sql="INSERT INTO user (UID,name,email,contact,password) 
 VALUES('$UID', '$name', '$email','$contact','$password')"	;

//store result 
	$result=mysqli_query($conn,$sql);



//display message according to results	
	if($result){
	
	
	
	header('location:user.php');	
		
		
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