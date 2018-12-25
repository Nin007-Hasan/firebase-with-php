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

	  $doctor_email=$_SESSION['doctor_email'];
	
	if (isset($_POST['zilla_code'])) {
 	# code...
 		$zilla_code = $_POST['zilla_code'];
	 }

	 $sql_Query="INSERT INTO doctor_add (patient,doctor) VALUES ('$doctor_email','$zilla_code')";

	 if(mysqli_query($con,$sql_Query)){

	 	header("Location: index.php");
	 	$_SESSION['doctor_name'] = $zilla_code;
		die();
	 
	 }
	 else{
	 
	 echo 'mysql_error()';
	 
	 }
	 mysqli_close($con);

?>