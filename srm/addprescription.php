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

    $username=mysqli_real_escape_string($con,$_POST['username']);
    $age=mysqli_real_escape_string($con,$_POST['age']);
    $date=mysqli_real_escape_string($con,$_POST['date']);
    $symptoms=mysqli_real_escape_string($con,$_POST['symptoms']);
    $doctor=mysqli_real_escape_string($con,$_POST['doctor']);
    $tablet1=mysqli_real_escape_string($con,$_POST['tablet1']);
    $t_morning=mysqli_real_escape_string($con,$_POST['t_morning']);
    $t_afternoon=mysqli_real_escape_string($con,$_POST['t_afternoon']);
    $t_night=mysqli_real_escape_string($con,$_POST['t_night']);
    $quantity1=mysqli_real_escape_string($con,$_POST['quantity1']);
    $syrup1=mysqli_real_escape_string($con,$_POST['syrup1']);
    $s_morning=mysqli_real_escape_string($con,$_POST['s_morning']);
    $s_afternoon=mysqli_real_escape_string($con,$_POST['s_afternoon']);
    $s_night=mysqli_real_escape_string($con,$_POST['s_night']);
    $quantity2=mysqli_real_escape_string($con,$_POST['quantity2']);
    $message=mysqli_real_escape_string($con,$_POST['message']);

    $insert_clint="insert into prescription(username,age,date,symptoms,doctor,tablet1,t_morning,t_afternoon,t_night,quantity1,syrup1,s_morning,s_afternoon,s_night,quantity2,message)

    values('$username','$age','$date','$symptoms','$doctor','$tablet1','$t_morning','$t_afternoon','$t_night','$quantity1','$syrup1','$s_morning','$s_afternoon','$s_night','$quantity2','$message')";

    $run_costumer = mysqli_query($con, $insert_clint);

    if($run_costumer){
            echo"<script>alert('Prescription Added')</script>";
        ?>
<META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost/srm/management.html">
<?php
        }

    else{
            echo"<script>alert('Signup not successful !')</script>";
        }
}
?>

<!--<p align="center"><a href="http://localhost/lifecare/login.php">login with Your new account</a></p>-->
<!--<p align="center"><a href="http://localhost/miniproject_ssp/deletion.php">View the records</a></p>-->
