<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "srm";

$con = mysqli_connect($servername,$username,$password,$dbname);

//if($con){
//    echo "Connection ok";
//}
//else{
//    echo "Connection failed".mysqli_connect_error();
//}

if(isset($_POST['submit']))
{


    $Email_ID=mysqli_real_escape_string($con,$_POST['Email_ID']);


    $insert_clint="insert into subscriptions(Email_ID)

    values('$Email_ID')";

    $run_costumer = mysqli_query($con, $insert_clint);

    if($run_costumer){
            echo"<script>alert('Subscription successful')</script>";
        ?>
<META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost/srm/indexlog.php">
<?php
        }

    else{
            echo"<script>alert('Subscription failed !')</script>";
        }
}
?>
