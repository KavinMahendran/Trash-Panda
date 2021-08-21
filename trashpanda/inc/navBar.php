<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="toilets.php">toilet</a></li>
       
      </ul>
     
     
		<?php if(isset($_SESSION['name'])){?>
       <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><?php echo $_SESSION['roleName']?></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['nsame']?><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="profile.php">MyProfile</a></li>
          
           
            <li role="separator" class="divider"></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
		<?php } else {
	?>
	<ul class="nav navbar-nav navbar-right">
        <li><a href="#" data-toggle="modal" data-target="#loginModal">login</a></li>
	</ul>
<?php	
} ?>
		
		
		
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>