<?php 
    include 'config.php';
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

  if (!isset($_SESSION['doctor_name'])) {
    header('location: doctor.php');
  }

  $doctor_email=$_SESSION['doctor_email'];
  $doctor_name=$_SESSION['doctor_name'];

  if (isset($_POST['comment'])) {
 	# code...
 		$comment = $_POST['comment'];
	 }

	 $sql_Query="INSERT INTO comment (email,comment) VALUES ('$doctor_email','$comment')";

	 if(mysqli_query($con,$sql_Query)){

	 	header("Location: patient.php");
		die();
	 
	 }
	 else{
	 
	 echo 'mysql_error()';
	 
	 }
	 mysqli_close($con);

?>