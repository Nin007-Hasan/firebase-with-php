<?php
	include ('config.php');

	session_start(); 

	  if (!isset($_SESSION['doctor_email'])) {
	    $_SESSION['msg'] = "You must log in first";
	    header('location: login.php');
	  }
	  if (isset($_GET['logout'])) {
	    session_destroy();
	    unset($_SESSION['username']);
	    header("location: login.php");
	  } 

	  $doctor_email= $_SESSION['doctor_email'];
	  //echo "$doctor_email";

	  if (isset($_POST['name'])) {
 	# code...
 		$name = $_POST['name'];
	 }

	 if (isset($_POST['specialization'])) {
 	# code...
 		$specialization = $_POST['specialization'];
	 }

	 if (isset($_POST['password'])) {
 	# code...
 		$password = $_POST['password'];
	 }

	 $sql_Query= "UPDATE doctor_profile set designation='$designation', name='$name', specialization='$specialization', password='$password' WHERE doctor_email='$doctor_email' ";

	 if(mysqli_query($con,$sql_Query)){

	 	header("Location: index.php");
		die();
	 
	 }
	 else{
	 
	 echo mysql_error();
	 
	 }
	 mysqli_close($con);
?>