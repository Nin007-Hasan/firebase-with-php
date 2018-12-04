<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ('app.php'); ?>

    <script src="https://www.gstatic.com/firebasejs/3.5.2/firebase.js"></script>

    
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
                    <h1 class="page-header">Add Doctor</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="container">
                <form action="insert_doctor.php" method="POST" >
                  <input type="text" placeholder="Designation" id="designation" name="designation" > 
                  <br><br>
                  <input type="text" placeholder="Doctor Email" id="doctor_email" name="doctor_email">
                  <br><br>
                  <input type="text" placeholder="Doctor ID" id="doctor_id" name="doctor_id">
                  <br><br>
                  <input type="text" placeholder="Doctor Phone" id="doctor_phone" name="doctor_phone">
                  <br><br>
                  <input type="text" placeholder="Hospital Id" id="hospital_id" name="hospital_id">
                  <br><br>
                  <select id="isApproved" name="isApproved">
                    <option value="true">True</option>
                    <option value="false">False</option>
                  </select>
                  <br><br>
                  <input type="text" placeholder="Doctor Name" id="name" name="name">
                  <br><br>
                  <input type="text" placeholder="Password" id="password" name="password">
                  <br><br>
                  <input type="text" placeholder="Doctor specialization" id="specialization" name="specialization">
                  <br><br>
                  <input type="text" placeholder="Token" id="token">
                  <br><br>
                  <input type="submit" id="Submit" onclick="add()">
                </form> 
            </div>
            <!-- /.row -->
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <script>
      // Initialize Firebase
      var designation_value;

      var config = {
        apiKey: "AIzaSyAFnq-YrY7MYOHrIKm5LR3IHl-8lFPSWpI",
        authDomain: "cse499healthmanagement.firebaseapp.com",
        databaseURL: "https://cse499healthmanagement.firebaseio.com",
        projectId: "cse499healthmanagement",
        storageBucket: "cse499healthmanagement.appspot.com",
        messagingSenderId: "638987735704"
      };
      firebase.initializeApp(config);
      
      var database= firebase.database();


      var ref=database.ref('doctors');
      // var designation_value;

      // var data={
      //    designation: designation_value
      //  }
      

      function add(){
        designation=document.getElementById("designation").value;
        doctor_email=document.getElementById("doctor_email").value;
        doctor_id=document.getElementById("doctor_id").value;
        doctor_phone=document.getElementById("doctor_phone").value;
        hospital_id=document.getElementById("hospital_id").value;
        isApproved=document.getElementById("isApproved").value;
        name=document.getElementById("name").value;
        specialization=document.getElementById("specialization").value;
        token=document.getElementById("token").value;




        data={designation,doctor_email,doctor_id,doctor_phone,hospital_id,isApproved,name,specialization,token};
        ref.push(data);
        window.location.href='index.php';
      }

      // console.log(designation);
      // ref.push(data);
      //console.log(designation_value);
      //console.log(ref.push(data));



      //ref.push(data);
    </script>


    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>