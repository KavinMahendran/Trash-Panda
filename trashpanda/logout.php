<?php 
session_start();//starting session


//unset the session values
unset($_SESSION['name']);
$res=session_destroy()	;

//redirect to home page
header('location:index.php');
?>