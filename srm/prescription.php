<?php
    include("connection.php");
    error_reporting(0);

    $username = $_GET['username'];
    $age = $_GET['age'];
    $date= $_GET['date'];
    $symptoms= $_GET['symptoms'];
    $doctor= $_GET['doctor'];
//    $message = $_GET['$message'];
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Prescription | SRM </title>

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
<div class="col-md-1">
</div>

<div class="col-md-8 jumbotron" id="asdf">
    <a class="navbar-brand text-center" href="index.html" id="logo"><img src="images/flogo.png" alt="image" width="40%"></a><br/>

<h3 class="text-center bg-primary text-white">Add Prescription</h3>
<br>
<form id="form" autocomplete="off" action="addprescription.php" method="POST">
<div class="form-row">
  <div class="form-group col-md-6">
    <label for="username">User Name</label>
    <input type="text" class="form-control" value="<?php echo $username ?>" id="username" name="username" required>
  </div>

    <div class="form-group col-md-2">
    <label for="age">Age</label>
    <input type="number" class="form-control" value="<?php echo $age ?>" id="age" name="age" required>
  </div>

<div class="form-group col-md-2">
    <label for="date">Date</label><br>
    <input type="date" placeholder="Date" value="<?php echo $date ?>" id="date" name="date" required>
  </div>
</div>

<div class="form-row">
  <div class="form-group col-md-6">
  <label for="age">Symptoms</label>
  <input type="text" class="form-control" value="<?php echo $symptoms ?>" id="symptoms" name="symptoms" required>
</div>

<div class="form-group col-md-6">
<label for="age">Doctor</label>
<input type="text" class="form-control" value="<?php echo $doctor ?>" id="doctor" name="doctor" required>
</div>
</div>

<div class="form-row">
  <div class="form-group col-md-4">
  <label for="tablet1">Tablet</label>
  <input type="text" class="form-control" id="tablet1" name="tablet1" required>
  </div>

  <div class="form-group col-md-2">
      <label for="t_morning">Morning</label>
           <select class="form-control" name="t_morning">

              <option>select</option>
              <option>Yes</option>
               <option>No</option>
            </select>
    </div>

    <div class="form-group col-md-2">
        <label for="t_afternoon">Afternoon</label>
             <select class="form-control" name="t_afternoon">
                <option>select</option>
                 <option>Yes</option>
                 <option>No</option>
              </select>
      </div>

      <div class="form-group col-md-2">
          <label for="t_night">Night</label>
               <select class="form-control" name="t_night">
                   <option>select</option>
                   <option>Yes</option>
                   <option>No</option>
                </select>
        </div>


        <div class="form-group col-md-2">
        <label for="quantity1">Quantity(in no)</label>
        <input type="text" class="form-control" id="quantity1" name="quantity1" required>
      </div>

</div>

<div class="form-row">
  <div class="form-group col-md-4">
  <label for="syrup1">Syrup</label>
  <input type="text" class="form-control" id="syrup1" name="syrup1" required>
  </div>

  <div class="form-group col-md-2">
      <label for="s_morning">Morning</label>
           <select class="form-control" name="s_morning">

              <option>select</option>
              <option>Yes</option>
               <option>No</option>
            </select>
    </div>

    <div class="form-group col-md-2">
        <label for="s_afternoon">Afternoon</label>
             <select class="form-control" name="s_afternoon">
                <option>select</option>
                 <option>Yes</option>
                 <option>No</option>
              </select>
      </div>

      <div class="form-group col-md-2">
          <label for="s_night">Night</label>
               <select class="form-control" name="s_night">
                   <option>select</option>
                   <option>Yes</option>
                   <option>No</option>
                </select>
        </div>


        <div class="form-group col-md-2">
        <label for="quantity2">Quantity(in ml)</label>
        <input type="text" class="form-control" id="quantity2" name="quantity2" required>
      </div>

</div>
<div class="form-group">
    <textarea rows="4" id="other_details" class="form-control" placeholder="Your Message..." name="message"></textarea>
  </div>
<br>

  <!-- <input type="submit" class="btn btn-success btn-sm btn-block" id="btt" value="Update" name="submit"> -->
   <button type="submit" class="btn btn-primary btn-sm btn-block"  id="btt" name="submit">Add</button>


</form></div><div class="col-md-1"></div></div></div>
    </body>
</html>
