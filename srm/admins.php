<html>
    <head>
         <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>
            Admins | SRM - <?php
            include("connection.php");
            error_reporting(0);
            session_start();

            echo "".$_SESSION['adid'];
            ?>
        </title>
        <link rel="shortcut icon" href="images/favicon1.png" type="image/x-icon" />
        <link rel="apple-touch-icon" href="images/favicon1.png">
        <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
        <!-- Site CSS -->
        <link rel="stylesheet" href="style.css">
        <!-- Colors CSS -->
        <!-- <link rel="stylesheet" href="css/colors.css"> -->
        <!-- ALL VERSION CSS -->
        <!-- <link rel="stylesheet" href="css/versions.css"> -->
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- Custom CSS -->
        <!-- <link rel="stylesheet" href="css/custom.css"> -->
        <style>
            body{
                background-image:url(images/price-bg.png);
                /* background-repeat: no-repeat; */
                /* background-color: DodgerBlue; */
                /* color: DodgerBlue; */
            }
            #dc{
             text-align: center;
             background-color: DodgerBlue;
             color: white;
            }
            .dr{
              color: white;
              text-align: center;
            }
            h1{
              color: white;
              text-align: center;
            }
            #addid{
              padding-top: 10px;
              padding-bottom: 10px;
              margin-top: 10px;
              text-align:center;
            }
            h3{
                text-align: left;
                /* text-align: center; */
                background-color: DodgerBlue;
                color: white;
                font-style: oblique;
            }
            a:hover{
              color: white;

            }
        </style>
    </head>
    <body>

        <!-- Image and text -->
        <!-- <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
          <a class="nav" href="#"><img src="images/flogo.png" width="30%" class="d-inline-block align-top" alt="" loading="lazy"></a>
            <ul class="nav justify-content-end">


          <li class="nav-item ">
            <button class="nav-link btn-sm" id="dc"><b><a class="nav-link bg-light" href="#">Home</a></b></button>
          </li> &nbsp;
          <li class="nav-item bg-dark">
            <button class="nav-link btn-sm" id="dc"><b><a class="nav-link bg-light" href="#Signups">Signups</a></b></button>
          </li> &nbsp;&nbsp;&nbsp;
          <li class="nav-item ">
            <button class="nav-link btn-sm" id="dc"><b><a class="nav-link bg-light" href="#Doctors">Doctors</a></b></button>
          </li> &nbsp;
          <li class="nav-item ">
            <button class="nav-link btn-sm" id="dc"><b><a class="nav-link bg-light" href="#Appointments">Appointments</a></b></button>
          </li> &nbsp;
          <li class="nav-item ">
            <button class="nav-link btn-sm" id="dc"><b><a class="nav-link bg-light" href="#Emergency">Emergency</a></b></button>
          </li> &nbsp;
          <li class="nav-item ">
            <button class="nav-link btn-sm" id="dc"><b><a class="nav-link bg-light" href="#Subscribers">Subscribers</a></b></button>
          </li> &nbsp;
                <li class="nav-item ">
            <button class="nav-link btn-sm" id="dc"><b><a class="nav-link bg-light" href="management.html">Logout</a></b></button>
          </li>&nbsp;
        </ul>
        </nav> -->

  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="images/flogo.png" width="25%" class="d-inline-block align-top" alt="" loading="lazy">
  <!-- <button type="button" class="btn btn-primary"> -->
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <h1 class="btn btn-lg btn-primary" id="addid"> <?php
  include("connection.php");
  error_reporting(0);
  session_start();

  echo "Welcome  ".$_SESSION['adid'];
  ?></h1>
  </a>
  <!-- <ul class="navbar-nav justify-content-left">
    <li class="nav-item">  </li></ul> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>

  </button>
  <div class="collapse navbar-collapse" id="navbarNav">


    <ul class="navbar-nav">
      <li class="nav-item">
        <button type="button" class="btn btn-outline-primary"><a class="nav-link" href="#">Home</a></button>
      </li>&nbsp;
      <li class="nav-item active">
        <button type="button" class="btn btn-outline-primary"><a class="nav-link" href="#Doctors">Doctors</a></button>
      </li>&nbsp;
      <li class="nav-item active">
        <button type="button" class="btn btn-outline-primary"><a class="nav-link" href="#Appointments">Appointments</a></button>
      </li>&nbsp;
      <li class="nav-item active">
        <button type="button" class="btn btn-outline-primary"><a class="nav-link" href="#Signups">Signups</a></button>
      </li>&nbsp;
      <li class="nav-item active">
        <button type="button" class="btn btn-outline-primary"><a class="nav-link" href="#Emergency">Emergency</a></button>
      </li>&nbsp;
      <li class="nav-item active">
        <button type="button" class="btn btn-outline-primary"><a class="nav-link" href="#Subscribers">Subscribers</a></button>
      </li>&nbsp;
      <li class="nav-item active">
        <button type="button" class="btn btn-outline-primary"><a class="nav-link" href="management.html">Logout</a></button>
      </li>
    </ul>
  </div>
</nav>



            </body>
</html>

<!---------------------------------------------------------------------------------------->
<!-- Doctors -->
<html>
    <head>
          <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>

        </title>
    </head>
    <body>
      <div id="Doctors" class="section wow fadeIn">
        <div class="container">
          <br>
        <h1>
          Welcome to SRM Admin Page</h1><hr>
        <h1>Doctors</h1>
            <h3>Doctors of SRM🩺</h3>
<div class="table-responsive">
        <table class="table table-striped table-primary">
            <thead>
            <tr>
                <th>Sl no</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email_ID</th>
                <th>Designation</th>
                <th>Doctor ID</th>
                <th>Password</th>
                <th colspan="2" align="center">Operation</th>
                </tr></thead>

<?php
            include("connection.php");
            error_reporting(0);
            $query = "SELECT * FROM doctors";
            $data = mysqli_query($con,$query);
            $total = mysqli_num_rows($data);

            // $result = mysqli_fetch_assoc($data);

            echo $result['sl_no']." ".$result['f_name']." ".$result['l_name']."".$result['email_id']." ".$result['designation']." ".$result['dr_id']." ".$result['pswd'];
                // echo "$total";

                if($total != 0){
                    // $result = mysqli_fetch_assoc($data);
                    while($result = mysqli_fetch_assoc($data)){
                        echo"
                        <tr>
                        <td>".$result['sl_no']."</td>
                        <td>".$result['f_name']."</td>
                        <td>".$result['l_name']."</td>
                        <td>".$result['email_id']."</td>
                        <td>".$result['designation']."</td>
                        <td>".$result['dr_id']."</td>
                        <td>".$result['pswd']."</td>
                        <td><a href= 'delete2.php?dr_id=$result[dr_id]' onclick = 'return checkdelete()'><input type = 'submit' value='Delete' id = 'dc'></td>

                        </tr>
                        ";
                    }
                    // echo " Table has records";
                }
                else{
                    echo "No recodrs found";
                }
            ?>

        </table>
      </div>
        <button class="nav-link btn" id="dc"><b><a class="nav-link bg-light" href="addoct.html">Add New Doctors</a></b></button>
        <script>
            function checkdelete()
            {
                return confirm('Are you sure you want to Remove the doctor details!!')
            }
        </script>
        <!-- <hr/> <h4 id=text>Management Authentication</h4>
                <button type="submit" class="btn btn-dark btn-sm btn-block"><a href="management.html" target="_blank">Verify</a></button></div> -->
            </div>
          </div>
    </body>
</html>
<!---------------------------------------------------------------------------------------->



<!---------------------------------------------------------------------------------------->
<!-- Appointments -->
<html>
    <head>
          <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>

        </title>
    </head>
    <body>
      <div id="Appointments" class="section wow fadeIn">
        <div class="container">
        <h1>Appointments</h1>
            <div><h3>Appointments taken so far🩺</h3>
        </div>
        <div class="table-responsive">
        <table class="table table-striped table-primary">
            <thead>
            <tr>
                <th>Sl no</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email_ID</th>
                <th>User ID</th>
                <th>age</th>
                <th>time</th>
                <th>date</th>
                <th>symptoms</th>
                <th>doctor</th>
                <th>message</th>
                <th colspan="2" align="center">Operation</th>
                </tr></thead>

<?php
            include("connection.php");
            error_reporting(0);
            $query = "SELECT * FROM appointments";
            $data = mysqli_query($con,$query);
            $total = mysqli_num_rows($data);

            // $result = mysqli_fetch_assoc($data);

            echo $result['sl_no']." ".$result['f_name']." ".$result['l_name']." ".$result['email_id']." ".$result['username']." ".$result['age']." ".$result['time']." ".$result['date']." ".$result['symptoms']." ".$result['doctor']." ".$result['other_details'];
                // echo "$total";

                if($total != 0){
                    // $result = mysqli_fetch_assoc($data);
                    while($result = mysqli_fetch_assoc($data)){
                        echo"
                        <tr>
                        <td>".$result['sl_no']."</td>
                        <td>".$result['f_name']."</td>
                        <td>".$result['l_name']."</td>
                        <td>".$result['email_id']."</td>
                        <td>".$result['username']."</td>
                        <td>".$result['age']."</td>
                        <td>".$result['time']."</td>
                        <td>".$result['date']."</td>
                        <td>".$result['symptoms']."</td>
                        <td>".$result['doctor']."</td>
                        <td>".$result['other_details']."</td>
                        <td><a href= 'delete3.php?date=$result[date]' onclick = 'return checkdelete()'><input type = 'submit' value='Cancel Appointment' id = 'dc'></td>

                        </tr>
                        ";
                    }
                    // echo " Table has records";
                }
                else{
                    echo "No recodrs found";
                }
            ?>

        </table>
      </div>
        <script>
            function checkdelete()
            {
                return confirm('Are you sure you want to cancel the Appointment...!')
            }
        </script>
            </div>
          </div>
    </body>
</html>

<!---------------------------------------------------------------------------------------->


<!--Signups  -->
<html>
    <head>
          <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>
            Displaying the records
        </title>
    </head>
    <body>
<div id="Signups" class="section wow fadeIn">
  <div class="container">


<div id="signups">

<h1>Signups</h1>
    <h3>Login details✔</h3>
    <div class="table-responsive">
<table class="table table-striped table-primary">
    <thead>
<!--        <table border="2" cellspacing="7">-->
    <tr>
        <th>SL no</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email_ID</th>
        <th>Phone No</th>
        <th>Address</th>
        <th>Pincode</th>
        <th>User Name</th>
        <th>Password</th>
        <th colspan="2" align="center">Operation</th>
    </tr>
        </thead>

<?php
    include("connection.php");
    error_reporting(0);
    $query = "SELECT * FROM clientlogins";
    $data = mysqli_query($con,$query);
    $total = mysqli_num_rows($data);

    // $result = mysqli_fetch_assoc($data);

    echo $result['sl_no']." ".$result['f_name']." ".$result['l_name']." ".$result['email_id']." ".$result['ph_no']." ".$result['address']." ".$result['pincode']." ".$result['username']." ".$result['cn_pswd'];

        // echo "$total";

        if($total != 0){
            // $result = mysqli_fetch_assoc($data);
            while($result = mysqli_fetch_assoc($data)){
                echo"
                <tr>
                <td>".$result['sl_no']."</td>
                <td>".$result['f_name']."</td>
                <td>".$result['l_name']."</td>
                <td>".$result['email_id']."</td>
                <td>".$result['ph_no']."</td>
                <td>".$result['address']."</td>
                <td>".$result['pincode']."</td>
                <td>".$result['username']."</td>
                <td>".$result['cn_pswd']."</td>

                <td><a href= 'delete1.php?username=$result[username]' onclick = 'return checkdelete()'><input type = 'submit' value='Delete' id = 'dc'></td>
                </tr>
                ";
            }
            // echo " Table has records";
        }
        else{
            echo "No recodrs found";
        }
    ?>

</table>
</div>
<script>
    function checkdelete()
    {
        return confirm('Are you sure you want to delete this record!!')
    }
</script>
    </div>
    </div>

<!---------------------------------------------------------------------------------------->

<html>
    <head>
          <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>
            Displaying the records
        </title>
    </head>
    <body>
        <div id="Emergency" class="section wow fadeIn">
          <div class="container">
        <h1>Emergency</h1>
            <div><h3>🚑Ambulence Bookings and Emergency logs🏥</h3>
        </div>
        <div class="table-responsive">
        <table class="table table-striped table-primary">
            <thead>
            <tr>
                <th>Sl.no</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>age</th>
                <th>city</th>
                <th>address</th>
                <th>landmark</th>
                <th>phone_no</th>
<!--                <th>message</th>-->
               <th colspan="2" align="center">Operation</th>
                </tr></thead>

<?php
            include("connection.php");
            error_reporting(0);
            $query = "SELECT * FROM emergency";
            $data = mysqli_query($con,$query);
            $total = mysqli_num_rows($data);

            // $result = mysqli_fetch_assoc($data);

            echo $result['sl_no']." ".$result['f_name']." ".$result['l_name']."".$result['age']." ".$result['city']." ".$result['address']." ".$result['landmark']." ".$result['phone_no'];
                // echo "$total";

                if($total != 0){
                    // $result = mysqli_fetch_assoc($data);
                    while($result = mysqli_fetch_assoc($data)){
                        echo"
                        <tr>
                        <td>".$result['sl_no']."</td>
                        <td>".$result['f_name']."</td>
                        <td>".$result['l_name']."</td>
                        <td>".$result['age']."</td>
                        <td>".$result['city']."</td>
                        <td>".$result['address']."</td>
                        <td>".$result['landmark']."</td>
                        <td>".$result['phone_no']."</td>
                        <td><a href= 'delete4.php?sl_no=$result[sl_no]' onclick = 'return checkdelete()'><input type = 'submit' value='Delete' id = 'dc'></td>

                        </tr>
                        ";
                    }
                    // echo " Table has records";
                }
                else{
                    echo "No recodrs found";
                }
            ?>

        </table>
      </div>
        <script>
            function checkdelete()
            {
                return confirm('Are you sure you want to delete this record!!')
            }
        </script>
            </div>
          </div>
    </body>
</html>

<!---------------------------------------------------------------------------------------->
<html>
    <head>
          <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>
            Displaying the records
        </title>
    </head>
    <body>
      <div id="Subscribers" class="section wow fadeIn">
        <div class="container">
        <h1>Email Subscribtions</h1>
            <div><h3>Subscribers🧧</h3>
        </div>
        <div class="table-responsive">
        <table class="table table-striped table-primary">
            <thead>
            <tr>
                <th>Sl no</th>
                <th>Email_ID</th>

                <th colspan="2" align="center">Operation</th>
                </tr></thead>

<?php
            include("connection.php");
            error_reporting(0);
            $query = "SELECT * FROM subscriptions";
            $data = mysqli_query($con,$query);
            $total = mysqli_num_rows($data);

            // $result = mysqli_fetch_assoc($data);

            echo $result['sl_no']." ".$result['Email_ID'];



                // echo "$total";

                if($total != 0){
                    // $result = mysqli_fetch_assoc($data);
                    while($result = mysqli_fetch_assoc($data)){
                        echo"
                        <tr>
                        <td>".$result['sl_no']."</td>
                        <td>".$result['Email_ID']."</td>

                        <td><a href= 'delete5.php? Email_ID=$result[Email_ID]' onclick = 'return checkdelete()'><input type = 'submit' value='Delete' id = 'dc'></td>

                        </tr>
                        ";
                    }
                    // echo " Table has records";
                }
                else{
                    echo "No recodrs found";
                }
            ?>

        </table>
      </div>
        <script>
            function checkdelete()
            {
                return confirm('Are you sure you want to delete this record!!')
            }
        </script>
            </div>
          </div>
    </body>
</html>
