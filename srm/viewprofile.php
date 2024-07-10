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
          <!-- <span class="navbar-toggler-icon"></span> -->

        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="nav justify-content-end">
            <li class="nav-item">
              <button type="button" class="btn btn-outline-primary"><a class="nav-link" href="indexlog.php">Home</a></button>
            </li>&nbsp;
            <li class="nav-item active">
              <button type="button" class="btn btn-outline-primary"><a class="nav-link" href="myprofile.php">Back</a></button>
            </li>&nbsp;
            <li class="nav-item active">
              <button type="button" class="btn btn-outline-primary"><a class="nav-link" href="index.html">Logout</a></button>
            </li>&nbsp;
      </ul>
    </div>
      </nav>
        <div id="dc">
          <div class="dctr">
            <h1><a class="dr" href="#"><?php
              include("connection.php");
              error_reporting(0);
              session_start();

              echo "Welcome ".$_SESSION['username'];
              ?></a></h1>
                <div><h3>🩺Here are your Prescriptions✔</h3>
            </div>
          </div>

        <table class="table table-striped table-info">
            <thead>
            <tr>
                <th>Sl.no</th>
                <th>User Name</th>
                <th>Age</th>
                <th>Date</th>
                <th>Symptoms</th>
                <th>Doctor</th>

                <th>tablet1</th>
                <th>t_morning</th>
                <th>t_afternoon</th>
                <th>t_night</th>
                <th>quantity1</th>

                <th>syrup1</th>
                <th>s_morning</th>
                <th>s_afternoon</th>
                <th>s_night</th>
                <th>quantity2</th>
                <th>message</th>
                </tr></thead>

<?php

          include("connection.php");
          error_reporting(0);
          if(isset($_POST['submit']))
          {
            $uname = $_POST['username'];
            $query = "SELECT * FROM prescription WHERE username='$uname' ";
            $data = mysqli_query($con,$query);
            $total = mysqli_num_rows($data);

            // $result = mysqli_fetch_assoc($data);

            echo $result['Sl_no']." ".$result['username']." ".$result['age']." ".$result['date']." ".$result['symptoms']." ".$result['doctor']." ".$result['tablet1']." ".$result['t_morning']." ".$result['t_afternoon']." ".$result['t_night']." ".$result['quantity1']." ".$result['syrup1']." ".$result['s_morning']." ".$result['s_afternoon']." ".$result['s_night']." ".$result['quantity2']." ".$result['message'];
//".$result['f_name']." ".$result['l_name']."


                // echo "$total";

                if($total != 0){
                    // $result = mysqli_fetch_assoc($data);
                    while($result = mysqli_fetch_assoc($data)){
                        echo"
                        <tr>
                        <td>".$result['sl_no']."</td>
                        <td>".$result['username']."</td>
                        <td>".$result['age']."</td>
                        <td>".$result['date']."</td>
                        <td>".$result['symptoms']."</td>
                        <td>".$result['doctor']."</td>

                        <td>".$result['tablet1']."</td>
                        <td>".$result['t_morning']."</td>
                        <td>".$result['t_afternoon']."</td>
                        <td>".$result['t_night']."</td>
                        <td>".$result['quantity1']."</td>

                        <td>".$result['syrup1']."</td>
                        <td>".$result['s_morning']."</td>
                        <td>".$result['s_afternoon']."</td>
                        <td>".$result['s_night']."</td>
                        <td>".$result['quantity2']."</td>

                        <td>".$result['message']."</td>

                        </tr>
                        ";
                    }
                    // echo " Table has records";
                }
              }
                else{
                    echo "No recodrs found";
                }
            ?>

        </table>
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
