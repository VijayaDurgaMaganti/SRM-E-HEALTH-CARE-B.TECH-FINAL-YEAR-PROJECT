<?php
    include("connection.php");
    error_reporting(0);

    $first_name = $_GET['first_name'];
    $last_name = $_GET['last_name'];
    $date= $_GET['date'];
//    $message = $_GET['$message'];
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Appointmnet</title>

    <style>
        body{
            background-image: url(images/clinic_01.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            margin-top: -100px;
        }

         #asdf{
            margin-top:100px;
            opacity: 80%;
        }
        #btn{
            text-decoration: none;
        }

        form button:active,
        form button:focus,
        form button:hover {
            background: rgba(164, 88, 255, 1);
            outline: none;
            text-decoration-line: none;
        }

        a{
            text-decoration: none;
            color: white;
            font-size: 20px;
            text-decoration-line: none;
        }
        a:hover{
            color:white;
            text-decoration: none;
        }
        #text{
            text-align: center;
        }
        #btt{
            font-size: 20px;
        }

    </style>
    </head>
    <body id="bg">
<!--    <body>-->
<div class="container mt-3" >

<div class="row">
<div class="col-md-4">
</div>

<div class="col-md-5 jumbotron" id="asdf">
    <a class="navbar-brand" href="index.html" id="logo"><img src="images/logo.png" alt="image"></a><br/>

<h3 class="text-center bg-primary text-white">Get an Appointment</h3>
<br>
<form id="form" autocomplete="off" action="" method="GET">

  <div class="form-group">
    <label for="fname">First Name</label>
    <input type="text" class="form-control" value="<?php echo $first_name ?>" id="fname" name="first_name" required>
  </div>

    <div class="form-group">
    <label for="lname">Last Name</label>
    <input type="text" class="form-control" value="<?php echo $last_name ?>" id="lname" name="last_name" required>
  </div>

<div class="form-group">
    <label for="date">Date</label>
    <input type="date" placeholder="Date" value="<?php echo $date ?>" id="date" name="date" required>
  </div>

  <input type="submit" class="btn btn-success btn-sm btn-block" id="btt" value="Update" name="update">
<!--    <button type="submit" class="btn btn-success btn-sm btn-block"  id="btt" name="update">Update</button>-->


</form></div><div class="col-md-4"></div></div></div>
    </body>
</html>

<?php

    if($_GET['update'])
    {
        $first_name = $_GET['first_name'];
        $first_name = $_GET['last_name'];
        $date= $_GET['date'];
//        $message = $_GET['$message'];

        $query = "UPDATE appointments SET first_name='$first_name',last_name='$last_name',date= '$date' WHERE first_name='$first_name'";

        $data = mysqli_query($con,$query);

        if($data){
            echo "<script>alert('Record updated succefully')</script>";
            ?>
            <META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost/srm/admins.php">
            <?php
        }
        else{
            echo "<script>alert('Record not updated')</script>";
        }
    }
?>
