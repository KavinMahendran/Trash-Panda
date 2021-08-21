<?php session_start(); //start the session ?>
<?php $page='index'; //storing the pages ?>
<?php include('inc/head.php'); //include head.php ?>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

<body class="body">
	<div class="wrapper2">
    <h1>Sign In</h1>
    <form action="login.php" method="post">
    	<input type="text" name="name" placeholder="Username" required>
        <br />
        <input type="password" name="password" placeholder="Password" required>
        <br />
        <input type="submit" value="Login">
        
        
    	
    </form>
    </div>
</body>
</html>
<?php



if(isset($_POST['name']) &&isset($_POST['password']) ){
	
$name=	$_POST['name'];
$password=$_POST['password'];



include('inc/dbConn.php');


 $sql="SELECT * FROM user WHERE name='$name' && password='$password' limit 1"	;


	$result=mysqli_query($conn,$sql);
	
	$no=mysqli_num_rows($result);
	
	if($no>0){
		
	while( $row=mysqli_fetch_assoc($result))	{
		
		$_SESSION['name']=$row['name'];
		
		
	}
	
	header('location:index.php');	
		
		
	}else{
		?>

		<script>
				alert("Invalid Login");
				window.location="login.php";
        </script>
		
	<?php	
	}
	
	
	
	

mysqli_close($conn);
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}










?>