<?php
	include ('config.php'); 

	if (isset($_POST['designation'])) {
 	# code...
 		$designation = $_POST['designation'];
	 }
	 if (isset($_POST['doctor_email'])) {
	 	# code...
	 	$doctor_email = $_POST['doctor_email'];
	 }
	 if (isset($_POST['doctor_id'])) {
	 	# code...
	 	$doctor_id = $_POST['doctor_id'];
	 }
	 if (isset($_POST['doctor_phone'])) {
	 	# code...
	 	$doctor_phone = $_POST['doctor_phone'];
	 }
	 if (isset($_POST['hospital_id'])) {
	 	# code...
	 	$hospital_id = $_POST['hospital_id'];
	 }
	 if (isset($_POST['isApproved'])) {
	 	# code...
	 	$isApproved = $_POST['isApproved'];
	 }
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

	$sql_Query= "INSERT INTO doctor_profile (designation,doctor_email,doctor_id,doctor_phone,hospital_id,isApproved,name,password,specialization) VALUES ('$designation','$doctor_email','$doctor_id','$doctor_phone','$hospital_id','$isApproved','$name','$password','$specialization')";

	 if(mysqli_query($con,$sql_Query)){

	 	header("Location: index.php");
		die();
	 
	 }
	 else{
	 
	 echo mysql_error();
	 
	 }
	 mysqli_close($con);
?>