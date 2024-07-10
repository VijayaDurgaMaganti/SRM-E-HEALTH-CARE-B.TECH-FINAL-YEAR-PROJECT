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
    $age=mysqli_real_escape_string($con,$_POST['age']);
    $city=mysqli_real_escape_string($con,$_POST['city']);
    $address=mysqli_real_escape_string($con,$_POST['address']);
    $landmark=mysqli_real_escape_string($con,$_POST['landmark']);
    $phone_no=mysqli_real_escape_string($con,$_POST['phone_no']);

    $insert_clint="insert into emergency(f_name,l_name,age,city,address,landmark,phone_no)

    values('$f_name','$l_name','$age','$city','$address','$landmark','$phone_no')";

    $run_costumer = mysqli_query($con, $insert_clint);

    if($run_costumer){
            echo"<script>alert('Emergency Regesterd, Ambulence will reach soon!')</script>";
        ?>
<META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost/srm/ambulance.php">
<?php
        }

    else{
            echo"<script>alert('Emergency not Regesterd !')</script>";
        }
}
?>
