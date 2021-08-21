<?php session_start(); //start the session ?>
<?php $page='bin'; //storing the pages ?>
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
        <h1 style="text-align:center; color:#FFF;">BIN</h1>
        <?php 
	  include('inc/dbConn.php'); 
	  
	  
 $sql="SELECT  * from bin"	;
		
	


	$result=mysqli_query($conn,$sql);
	
	$no=mysqli_num_rows($result);
	
	if($no>0){
		
		
		?>
	  <table class="table table-responsive" >
		  
		  <colgroup span="7" ></colgroup>
		   <colgroup span="2" style=""></colgroup>
		  
		  <tr style="background-color: #000;color:#fff">
          	<td>No</td>
			  <td>BID</td>
			  <td>Capacity</td>
			  <td>BLID</td>
              <td>Edit</td>
              <td>Delete</td>
              <td>Clean</td>
		  </tr>
	  
	  <?php
		$no=0;
	while( $row=mysqli_fetch_assoc($result))	{
		$no++;
		?>
		<tr style="color:#FFF; ">
			<td><?php echo $no; ?></td>
		  <td><?php echo $row['BID']; ?></td>
			<td><?php echo $row['capacity']; ?></td>
			<td><?php echo $row['BLID']; ?></td>
			<?php if(($_SESSION['name'])){ ?>
			
			<td>
				<form action="editBin.php">
					<input type="hidden" name="BID" value="<?php echo $row['BID']; ?>">
				<button type="submit" class="btn btn-primary btn-sm">
				<span class="glyphicon glyphicon-pencil"></span>
				</button>
				</form>	
					</td>
			<td>
				<form action="deleteBin.php" onSubmit=" return getConfirmation();">
					<input type="hidden" name="BID" value="<?php echo $row['BID']; ?>">
				<button type="submit" class="btn btn-danger btn-sm">
				<span class="glyphicon glyphicon-trash"></span>
				</button>
					</form>
					
					</td>
			
			<?php }
			if($row['capacity']>="80"){ ?>
            
            <td style="background-color:#F00; ">
				<?php echo "To be Emptied"; ?>

					</td>
             
             <?php }else { ?>
            
            <td style="background-color:#0C0; ">
				
					<?php echo "Does not need to be Emptied"; ?>
				
				
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
		<button class="btn btn-primary" data-toggle="modal" data-target="#saveBinModal">
         <span class="glyphicon glyphicon-plus"></span> Add New Bin</button>
		
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
      <!-- add new bin modal-->

<div class="modal fade" id="saveBinModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel"> <span class="glyphicon glyphicon-plus"></span> Add new Bin</h4>
      </div>
		<form action="saveBin.php" method="post">
		
      <div class="modal-body">
        
          <div class="form-group">
            <label for="BID" class="control-label">Bin ID</label>
            <input type="text" class="form-control" id="BID" name="BID" required>
          </div>
		  
		   <div class="form-group">
            <label for="capacity" class="control-label">Capacity</label>
            <input type="text" class="form-control" id="capacity" name="capacity" required>
          </div>
          
		  <div class="form-group">
            <label for="BLID" class="control-label">Building ID</label>
            <input type="text" class="form-control" id="BLID" name="BLID" required>
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

<!-- end bin modal-->  
	  
	  
	  
  </body>


</html> 
	  