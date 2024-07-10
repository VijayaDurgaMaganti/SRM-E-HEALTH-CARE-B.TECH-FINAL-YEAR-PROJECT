<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "srm";

$con = mysqli_connect($servername,$username,$password,$dbname);

if($con){
    echo "Connection ok";
}
else{
    echo "Connection failed".mysqli_connect_error();
}

if(isset($_POST['submit']))
{

    $f_name=mysqli_real_escape_string($con,$_POST['f_name']);
    $l_name=mysqli_real_escape_string($con,$_POST['l_name']);
    $email_id=mysqli_real_escape_string($con,$_POST['email_id']);
    $designation=mysqli_real_escape_string($con,$_POST['designation']);
    $dr_id=mysqli_real_escape_string($con,$_POST['dr_id']);
    $pswd=mysqli_real_escape_string($con,$_POST['pswd']);

    $insert_clint="insert into doctors(f_name,l_name,email_id,designation,dr_id,pswd)

    values('$f_name','$l_name','$email_id','$designation','$dr_id','$pswd')";

    $run_costumer = mysqli_query($con, $insert_clint);

    if($run_costumer){
            echo"<script>alert('Doctor added successfully')</script>";
        ?>
<META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost/srm/admins.php">
<?php
        }

    else{
            echo"<script>alert('Errorr, please try again !')</script>";
        }
}
?>

<!--<p align="center"><a href="http://localhost/lifecare/login.php">login with Your new account</a></p>-->
<!--<p align="center"><a href="http://localhost/miniproject_ssp/deletion.php">View the records</a></p>-->
