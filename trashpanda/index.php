<?php session_start(); //start the session ?>
<?php $page='index'; //storing the pages ?>
<?php include('inc/head.php'); //include head.php ?>

<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<body class="body">
	<div class="background">
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
        
        
        <div class="main-text">
        	<h1>Web Portal of Trash Panda</h1>
    </header>
	  
	  
	 
	
	  
	  
	  
	 
	  
 
	</div>  
  </body>


</html>