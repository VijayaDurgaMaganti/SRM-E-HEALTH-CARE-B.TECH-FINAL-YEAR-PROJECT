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
    $ph_no=mysqli_real_escape_string($con,$_POST['ph_no']);
    $address=mysqli_real_escape_string($con,$_POST['address']);
    $pincode=mysqli_real_escape_string($con,$_POST['pincode']);
    $username=mysqli_real_escape_string($con,$_POST['username']);
    $cr_pswd=mysqli_real_escape_string($con,$_POST['cr_pswd']);
    $cn_pswd=mysqli_real_escape_string($con,$_POST['cn_pswd']);

    $insert_clint="insert into clientlogins(f_name,l_name,email_id,ph_no,address,pincode,username,cr_pswd,cn_pswd)

    values('$f_name','$l_name','$email_id','$ph_no','$address','$pincode','$username','$cr_pswd','$cn_pswd')";

    $run_costumer = mysqli_query($con, $insert_clint);

    if($run_costumer){
            echo"<script>alert('Signup successful')</script>";
        ?>
<META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost/srm/login.php">
<?php
        }

    else{
            echo"<script>alert('Signup not successful !')</script>";
        }
}
?>

<!--<p align="center"><a href="http://localhost/lifecare/login.php">login with Your new account</a></p>-->
<!--<p align="center"><a href="http://localhost/miniproject_ssp/deletion.php">View the records</a></p>-->
