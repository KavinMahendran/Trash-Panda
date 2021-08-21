<?php session_start(); //start the session ?>
<?php $page='users'; //storing the pages ?>
<?php include('inc/head.php'); //include head.php ?>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<body >
	<header class="header">
    	<div class="wrapper">
        	<div class="logo">
            	<!--<img src="img/Trash Panda Logo.ico" alt="logo">-->
            </div>
            <?php
	  /*
	  condition to check whether a user logged in and show the navbar accordingly
	  */
	  if(isset($_SESSION['name'])){
	      ?>
				<ul class="nav-area navbar">
                <li><a href="index.php">HOME</a></li>
                <li><a href="bin.php">BIN</a></li>
                <li><a href="building.php">BUILDING</a></li>
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
        <h1 style="text-align:center; color:#FFF;">Users</h1>
        <?php 
	  include('inc/dbConn.php'); 
	  
	  
 $sql="SELECT  * from user"	;
		
	


	$result=mysqli_query($conn,$sql);
	
	$no=mysqli_num_rows($result);
	
	if($no>0){
		
		
		?>
	  <table class="table table-responsive" >
		  
		  <colgroup span="7" ></colgroup>
		   <colgroup span="2" style=""></colgroup>
		  
		  <tr style="background-color: #000;color:#fff">
          	<td>No</td>
			  <td>Name</td>
			  <td>Email</td>
			  <td>Contact</td>
              <td>Edit</td>
              <td>Delete</td>
              
		  </tr>
	  
	  <?php
		$no=0;
	while( $row=mysqli_fetch_assoc($result))	{
		$no++;
		?>
		<tr style="color:#FFF; ">
			<td><?php echo $no; ?></td>
		  <td><?php echo $row['name']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['contact']; ?></td>
			<?php if(($_SESSION['name'])){ ?>
			
			<td>
				<form action="editUser.php">
					<input type="hidden" name="UID" value="<?php echo $row['UID']; ?>">
				<button type="submit" class="btn btn-primary btn-sm">
				<span class="glyphicon glyphicon-pencil"></span>
                
				</button>
				</form>	
					</td>
			<td>
				<form action="deleteUser.php" onSubmit=" return getConfirmation();">
					<input type="hidden" name="UID" value="<?php echo $row['UID']; ?>">
				<button type="submit" class="btn btn-danger btn-sm">
				<span class="glyphicon glyphicon-trash"></span>
				</button>
					</form>
					
					</td>
			
			
		  </tr>
		
	<?php	
	}
	 
	?>
    <?php	
	}
	 
	?>
		  
	</table>	
		
	<?php  
	}
	  
	 
	  ?>
	 
		<?php if(($_SESSION['name'])){ ?>
		<button class="btn btn-primary" data-toggle="modal" data-target="#saveUserModal">
         <span class="glyphicon glyphicon-plus"></span> Add New User</button>
		
		<?php } ?>
</section>  	  
	  
	  
	  
	  
	  
	  
 <?php //include('inc/footer.php'); ?>	 

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
      <!-- add new User modal-->

<div class="modal fade" id="saveUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel"> <span class="glyphicon glyphicon-plus"></span> Add new User</h4>
      </div>
		<form action="saveUser.php" method="post">
		
      <div class="modal-body">
        
          <div class="form-group">
            <label for="UID" class="control-label">User ID</label>
            <input type="text" class="form-control" id="UID" name="UID" required>
          </div>
		  
		   <div class="form-group">
            <label for="name" class="control-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          
		  <div class="form-group">
            <label for="email" class="control-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          
		  <div class="form-group">
            <label for="contact" class="control-label">Contact</label>
            <input type="text" class="form-control" id="contact" name="contact" required>
          </div>
		  
           <div class="form-group">
            <label for="password" class="control-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
		  
		 
		  
		  
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
	</form>		
			
    </div>
  </div>
</div>

<!-- end user modal-->  
	  
	  
	  
  </body>


</html> 
	  