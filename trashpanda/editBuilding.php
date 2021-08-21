<?php session_start(); //start session ?>
<?php $page='bin'; ?>
<?php include('inc/head.php'); ?>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">


  <body >
	 <header class="header">
    	<div class="wrapper">
        	<div class="logo">
            	<!--<img src="img/Trash Panda Logo.ico" alt="logo">-->
            </div>
            <?php
			 if(isset($_GET['BLID'])){
		  $BLID=$_GET['BLID'];
	  }
	  /*
	  condition to check whether a user logged in and show the navbar accordingly
	  */
	  if(isset($_SESSION['name'])){
	      ?>
				<ul class="nav-area navbar">
                <li><a href="index.php">HOME</a></li>
                <li><a href="bin.php">BIN</a></li>
                <li><a href="building.php">Building</a></li>
                <li><a href="user.php">USER</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
                </ul>
          <?php
	  
	  }else{
		?>
        <ul class="nav-area navbar-right">
        <li><a href="login.php">LOGIN</a></li>
        	
        </ul>
		 <?php  
	  }
	  ?>
        </div>
        
        
        	<section class="container table-responsive" style="min-height: 400px;"> 
            <h1 style="text-align:center; color:#FFF;">BUILDING</h1>

	<?php 
	  include('inc/dbConn.php'); 
	  
 
 $sql="SELECT  * from building where BLID='$BLID' limit 1 "	;



	$result=mysqli_query($conn,$sql);
	
	$no=mysqli_num_rows($result);
	
	if($no>0){
		
		
		?>
		
		<form action="updateBuilding.php" id="myForm" method="post">
	  <table class="table table-bordered" style="color:#000;">
		  
		 
		  
		 
	  
	  <?php
		$no=0;
	while( $row=mysqli_fetch_assoc($result))	{
		$no++;
		?>
		
		  
		<tr>
			<td>Name</td>
		  <td> <input name="BLID" type="hidden" value="<?php echo $row['BLID']; ?>"  />
			  <input name="name" type="text" value="<?php echo $row['name']; ?>"  class="form-control"/></td>
		  </tr>	
			
			<tr>
			<td>Number of Bin</td>	
		  <td><input name="NOB" type="text" value="<?php echo $row['NOB']; ?>" class="form-control"/></td>
		  </tr>	
	<?php	
	}
	 
	?>
		  
	</table>	
		</form>	
	<?php  
	}
	  
	 
	  ?>
	 
		<?php if(($_SESSION['name'])){ ?>
		<button form="myForm" type="submit" class="btn btn-primary pull-right" >
        <span class="glyphicon glyphicon-plus"></span> Update</button>
		
		<?php } ?>
</section>  	  
	  
	  
	  
	  
	  
	  

 <?php include('inc/scripts.php'); ?>	
	  
<?php include('inc/allModals.php'); ?>

	<script>
	  function getConfirmation(){
		  var x=confirm("is this ok?");
		  
		  if(x==true){
			  return true;
		  }else{
			return false;  
		  }
		  
		  
	  }
	  
	  
	  </script>  
	  
	  
	  
	  
	
	  
	  
	  
  </body>


</html>