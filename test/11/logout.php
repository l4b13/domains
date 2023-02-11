<?php
  session_start();
  session_destroy();

  if (isset($_COOKIE["UserName"])){
	  setcookie("UserName", '', time()-3600);
	}
 
	header('location:index.php');
 
?>