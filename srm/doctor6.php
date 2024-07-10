<html>
    <head>
          <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>
            Doctors | SRM - <?php
            include("connection.php");
            error_reporting(0);
            session_start();

            echo "".$_SESSION['dr_id'];
            ?>
        </title>

        <link rel="shortcut icon" href="images/favicon1.png" type="image/x-icon" />
        <link rel="apple-touch-icon" href="images/favicon1.png">
        <style>
            body{
                background-image:url(images/slider-p2.png);
                background-repeat: no-repeat;

            }

            #dc{
             text-align: center;
             background-color: DodgerBlue;
            }
            .dr{
              color: black;
            }
        </style>
    </head>
    <body>
      <nav class="navbar navbar-light bg-light navbar-expand-lg">
        <a class="navbar-brand" href="#"><img src="images/flogo.png" width="25%" class="d-inline-block align-top" alt="" loading="lazy"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>

        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

          <ul class="nav justify-content-end">
            <li class="nav-item">
              <button type="button" class="btn btn-outline-primary"><a class="nav-link" href="#">Home</a></button>
            </li>&nbsp;
            <li class="nav-item active">
              <button type="button" class="btn btn-outline-primary"><a class="nav-link" href="drview6.php">Consulted</a></button>
            </li>&nbsp;
            <li class="nav-item active">
              <button type="button" class="btn btn-outline-primary"><a class="nav-link" href="management.html">Logout</a></button>
            </li>&nbsp;
      </ul>
    </div>
      </nav>
        <div id="dc">
          <div class="dctr">
            <h1>
              <a class="dr" href="#"><?php
              include("connection.php");
              error_reporting(0);
              session_start();

              echo "👨‍⚕️Welcome Doctor ".$_SESSION['dr_id'];
              ?></a>
              👩‍⚕️</h1>
                <div><h3>🩺Here are your Appointments✔</h3>
            </div>
          </div>
<div class="table-responsive">
        <table class="table table-striped table-primary">
            <thead>
            <tr>
                <th>Sl.no</th>
                <!-- <th>First Name</th>
                <th>Last Name</th> -->
                <th>Email ID</th>
                <th>User Name</th>
                <th>Age</th>
                <th>Time</th>
                <th>Date</th>
                <th>Symptoms</th>
                <th>Doctor</th>
                <th>Other Details</th>
                <th>Add Prescription</th>
                <!-- <th>Mark as Visited</th> -->
                </tr></thead>

<?php
            include("connection.php");
            error_reporting(0);
            $query = "SELECT * FROM appointments WHERE doctor = 'Dr. Rahul Ramsai - Pulmonology' GROUP BY date ASC ";
            $data = mysqli_query($con,$query);
            $total = mysqli_num_rows($data);

            // $result = mysqli_fetch_assoc($data);

            echo $result['Sl_no']." ".$result['email_id']." ".$result['username']." ".$result['age']." ".$result['time']." ".$result['date']." ".$result['symptoms']." ".$result['doctor']." ".$result['other_details'];
//".$result['f_name']." ".$result['l_name']."


                // echo "$total";

                if($total != 0){
                    // $result = mysqli_fetch_assoc($data);
                    while($result = mysqli_fetch_assoc($data)){
                        echo"
                        <tr>
                        <td>".$result['sl_no']."</td>

                        <td>".$result['email_id']."</td>
                        <td>".$result['username']."</td>
                        <td>".$result['age']."</td>
                        <td>".$result['time']."</td>
                        <td>".$result['date']."</td>
                        <td>".$result['symptoms']."</td>
                        <td>".$result['doctor']."</td>
                        <td>".$result['other_details']."</td>
                        <td><a href= 'prescription.php?username=$result[username]&age=$result[age]&date=$result[date]&symptoms=$result[symptoms]&doctor=$result[doctor]'><input type = 'submit' value='Add' id = 'dc'></td>

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
    </body>
</html>

<!--<td><a href= 'delete.php?username=$result[username]' onclick = 'return checkdelete()'><input type = 'submit' value='Delete' id = 'editbtnD'></td>-->
<!-- <td>".$result['first_name']."</td> -->
<!-- <td>".$result['last_name']."</td> -->
<!-- <td><a href= 'delete2.php?last_name=$result[username]' onclick = 'return checkdelete()'><input type = 'submit' value='Visited' id = 'dc'></td> -->
