<?php
    include("connection.php");
    error_reporting(0);
    session_start();
?>

<html>
<head>
    <title>Login | SRM</title>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon1.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/favicon1.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    <style>
        #bg{
            background-image: url(images/dctr.jpg);
            background-repeat: no-repeat;
           background-position: center;
            margin-top: -90px;
           background-size: cover;
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
            font-size: 15px;
            text-decoration-line: none;
        }
        a:hover{
            color:white;
            text-decoration: none;
        }
        #text{
            text-align: center;
        }
        .frgt{
          float: right;
          /* color: blue;
          background-color: blue; */
        }

    </style>
</head>


<body id="bg">
<!--    <body>-->
<div class="container mt-3" >
<div class="row">

<div class="col-md-4">
</div>

<div class="col-md-4 jumbotron" id="asdf">
  <a class="navbar-brand" href="index.html" id="logo"><img src="images/flogo.png" alt="image" width="100%" align="center"></a><br/>

<h4 class="text-center bg-success text-white">Login</h4>
<br>
<form id="form" action="" method="post">

  <div class="form-group">
    <label for="email_id">Email Address</label>
    <input type="email" class="form-control" id="email_id" name="email_id" required>
  </div>

  <div class="form-group">
    <label for="username">User Name</label>
    <input type="text" class="form-control" id="username" name="username" required>
  </div>

  <div class="form-group">
    <label for="cn_pswd">Password</label>
    <input type="password" class="form-control" id="cn_pswd" name="cn_pswd" required>
  </div>


    <button type="submit" class="btn btn-success btn-sm btn-block" name="submit">Login</button>
    <button type="submit" class="btn btn-danger btn-sm btn-block" name="submit"><a href="recovery.php" target="_blank">Forgot your password?</a></button>


</form>
    <div>
<hr/> <h4 id=text>Create Account</h4>
        <button type="submit" class="btn btn-info btn-sm btn-block"><a href="signup.html" target="_blank">Signup</a></button></div>
   <div>
<br/><hr/> <h4 id=text>Management Authentication</h4>
        <button type="submit" class="btn btn-dark btn-sm btn-block"><a href="management.html" target="_blank">Verify</a></button></div>
</div>

<div class="col-md-4">

</div>


</div>

</div>

</body>

</html>


<?php
    if(isset($_POST['submit']))
    {
        $email = $_POST['email_id'];
        $pwd = $_POST['cn_pswd'];
        $uname = $_POST['username'];
        $query = "SELECT * FROM clientlogins WHERE email_id='$email' && username='$uname' && cn_pswd='$pwd'";
        $data = mysqli_query($con,$query);

        $total = mysqli_num_rows($data);

        // echo $total;

        if($total == 1)
        {
            // echo "Login Succefull";
            // header('location:display.php');
            header('location:indexlog.php');
            $_SESSION['email_id']=$email;
            $_SESSION['username']=$uname;
//            <META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost/srm/indexlog.php">


        }
        else
        {
            echo "<font color = 'red'>Invalid mail ID or Password";

        }
    }
?>
