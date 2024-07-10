<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Appointmnets | SRM - <?php
    include("connection.php");
    error_reporting(0);
    session_start();

    echo "".$_SESSION['username'];
    ?></title>
    <link rel="shortcut icon" href="images/favicon1.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/favicon1.png">
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
  <a class="navbar-brand" href="index.html" id="logo"><img src="images/flogo.png" alt="image" width="100%"></a><br/>

<h3 class="text-center bg-primary text-white">Get an Appointment</h3>
<br>
<form id="form" action="apt1.php" method="post">

  <div class="form-group">
    <label for="f_name">First Name</label>
    <input type="text" class="form-control" id="f_name" name="f_name" required>
  </div>

    <div class="form-group">
    <label for="l_name">Last Name</label>
    <input type="text" class="form-control" id="l_name" name="l_name" required>
  </div>



  <div class="form-group">
  <label for="email_id">Email ID</label>
  <input type="email" class="form-control" value="<?php
  include("connection.php");
  error_reporting(0);
  session_start();
  echo "".$_SESSION['email_id'];
  ?>" id="email_id" name="email_id" required>
  </div>

  <div class="form-group">
  <label for="user_id">User ID</label>
  <input type="text" class="form-control" value="<?php
  include("connection.php");
  error_reporting(0);
  session_start();
  echo "".$_SESSION['username'];
  ?>" id="username" name="username" required>
  </div>

<!-- <div class="form-group">
    <label for="email_id">Email ID</label>
    <input type="email" class="form-control" id="email_id" name="email_id" required>
  </div>

  <div class="form-group">
      <label for="username">User ID</label>
      <input type="text" class="form-control" id="username" name="username" required>
    </div> -->

<div class="form-group">
    <label for="age">Age</label>
    <input type="number" class="form-control" id="age" name="age" required>
  </div>

<div class="form-group">
    <label for="time">Time</label>
         <select class="form-control" name="time">
             <option>Time</option>
             <option>AM</option>
             <option>PM</option>
          </select>
  </div>

<div class="form-group">
    <label for="date">Date</label>
    <input type="date" placeholder="Date" id="date" name="date" required>
  </div>

    <div class="form-group">
    <label for="symptoms">Symptoms</label>
    <input type="text" class="form-control" id="symptoms" name="symptoms" required>
  </div>

    <div class="form-group">
        <select class="form-control" name="doctor">
            <option>Doctor Name</option>
            <option>Dr. A Lakshman  - Cardiologist</option>
        </select>
    </div>

  <div class="form-group">
      <textarea rows="4" id="other_details" class="form-control" placeholder="Your Message..." name="other_details"></textarea>
    </div>

    <button type="submit" class="btn btn-success btn-sm btn-block"  id="btt" name="submit">Submit</button>
<!--    <button type="submit" class="btn btn-success btn-sm btn-block"><a href="index.html" target="_blank">Submit</a></button>-->

</form></div><div class="col-md-4"></div></div></div>
    </body>
</html>
