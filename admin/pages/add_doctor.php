

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ('app.php'); ?>
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
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="container">
                <form action="insert_doctor.php" method="POST">
                  <input type="text" name="designation" value="designation">
                  <br><br>
                  <input type="text" name="doctor_email" value="doctor_email">
                  <br><br>
                  <input type="text" name="doctor_id" value="doctor_id">
                  <br><br>
                  <input type="text" name="doctor_phone" value="doctor_phone">
                  <br><br>
                  <input type="text" name="hospital_id" value="hospital_id">
                  <br><br>
                  <input type="text" name="isApproved" value="isApproved">
                  <br><br>
                  <input type="text" name="name" value="name">
                  <br><br>
                  <input type="text" name="specialization" value="specialization">
                  <br><br>
                  <input type="text" name="token" value="token">
                  <br><br>
                  <br><br>
                  <input type="submit" value="Submit">
                </form> 
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
