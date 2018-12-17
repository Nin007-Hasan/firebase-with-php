<?php 
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

  include 'config.php';

  $doctor_email= $_SESSION['doctor_email'];

  $sql_Query= "SELECT * FROM doctor_profile WHERE doctor_email='$doctor_email' ";
  $result = mysqli_query($con, $sql_Query);
  
?> 


<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ('app.php'); ?>
    <script src="https://www.gstatic.com/firebasejs/3.5.2/firebase.js"></script>
    <script>
      // Initialize Firebase
      var config = {
        apiKey: "AIzaSyAFnq-YrY7MYOHrIKm5LR3IHl-8lFPSWpI",
        authDomain: "cse499healthmanagement.firebaseapp.com",
        databaseURL: "https://cse499healthmanagement.firebaseio.com",
        projectId: "cse499healthmanagement",
        storageBucket: "cse499healthmanagement.appspot.com",
        messagingSenderId: "638987735704"
      };
      firebase.initializeApp(config);
      var database = firebase.database();



      var ref=database.ref('doctors');

      var user = firebase.auth().currentUser;

        if (user == "doc@doc.gov") {
          user.providerData.forEach(function (profile) {
            console.log("Sign-in provider: " + profile.providerId);
            console.log("  Provider-specific UID: " + profile.uid);
            console.log("  Name: " + profile.displayName);
            console.log("  Email: " + profile.email);
            console.log("  Photo URL: " + profile.photoURL);
          });
        }
      
    </script>
</head>


<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <?php include ('header.php'); ?>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Doctor Profile</h1>
                </div>
                <!-- /.col-lg-12 -->
                <!-- <div class="col-lg-12">
                    <a href="add_doctor.php">Add New Doctor</a>
                </div> -->
                <div class="page-wrapper" style="margin: 24px;">
                    <div class="row">
                        <form method="POST" action="profile_edit.php">
                            <input type="text" name="designation" placeholder="designation"><br><br>
                            <input type="text" name="name" placeholder="Full Name"><br><br>
                            <input type="text" name="specialization" placeholder="Specialization"><br><br>
                            <input type="text" name="password" placeholder="Password"><br><br>
                            <input type="submit" name="submit" placeholder="Save">
                        </form>
                        
                    <!-- <h4>Docotor Name: <?php echo $value->doctor_name; ?></h4>
                    <h4>Doctor Email:</h4>
                    <h4>Doctor Phone:</h4>
                    <h4>Doctor Password:</h4> -->
                </div>
                </div>
                <div class="container">
                    
                </div>
                
            </div>
            <!-- /.row -->
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
