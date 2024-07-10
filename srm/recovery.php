<?php
    include("connection.php");
    error_reporting(0);
    session_start();
?>

<html>
<head>
    <title>Recovery | SRM</title>
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
    body{
      padding-top: 5%;
    }
        #bg{
            background-image: url(images/pswd.png);
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
        #psd{
          color: white;
          background-color: rgb(178,52,74);
          text-align: center;
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

<h4 class="text-center bg-danger text-white">Recover My Password</h4>
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
    <label for="ph_no">Phone Number</label>
    <input type="text" class="form-control" id="ph_no" name="ph_no" required>
  </div>


    <button type="submit" class="btn btn-danger btn-sm btn-block" name="submit">Get</button>

</form>


<div class="col-md-4">

</div>


</div>

</div>

<div id="dc">
  <div class="dctr">
    <!-- <h1>
      <a class="dr" href="#">
      </a>
      👩‍⚕️</h1> -->
        <div><h3 id="psd">Your Password Will Be Recoverd, Once You Proveide Valid Details</h3>
    </div>
  </div>

<table class="table table-striped table-danger">
    <thead>
    <tr>
        <th>Email ID</th>
        <th>User Name</th>
        <th>Phone Number</th>
        <th>Password</th>

        </tr></thead>
<?php
    if(isset($_POST['submit']))
    {
        $email = $_POST['email_id'];
        $uname = $_POST['username'];
        $ph = $_POST['ph_no'];
        $query = "SELECT * FROM clientlogins WHERE email_id='$email' && username='$uname' && ph_no='$ph'";
        $data = mysqli_query($con,$query);

        $total = mysqli_num_rows($data);

        // echo $total;

        if($total == 1)
        {


          $query = "SELECT email_id,username,ph_no,cn_pswd FROM clientlogins WHERE username='$uname' ";
          $data = mysqli_query($con,$query);
          $total = mysqli_num_rows($data);

          echo $result['email_id']." ".$result['username']." ".$result['ph_no']." ".$result['cn_pswd'];

          if($total != 0){
              // $result = mysqli_fetch_assoc($data);
              while($result = mysqli_fetch_assoc($data)){
                  echo"
                  <tr>
                  <td>".$result['email_id']."</td>
                  <td>".$result['username']."</td>
                  <td>".$result['ph_no']."</td>
                  <td>".$result['cn_pswd']."</td>
                  </tr>

                  ";
              }
              // echo " Table has records";
          }
          else{
              echo "No recodrs found";
          }

        }
        else
        {
            echo "<font color = 'red'>Invalid mail ID or Password";

        }
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
