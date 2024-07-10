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
    $username=mysqli_real_escape_string($con,$_POST['username']);
    $age=mysqli_real_escape_string($con,$_POST['age']);
    $time=mysqli_real_escape_string($con,$_POST['time']);
    $date=mysqli_real_escape_string($con,$_POST['date']);
    $symptoms=mysqli_real_escape_string($con,$_POST['symptoms']);
    $doctor=mysqli_real_escape_string($con,$_POST['doctor']);
    $other_details=mysqli_real_escape_string($con,$_POST['other_details']);

    $insert_clint="insert into appointments(f_name,l_name,email_id,username,age,time,date,symptoms,doctor,other_details)

    values('$f_name','$l_name','$email_id','$username','$age','$time','$date','$symptoms','$doctor','$other_details')";

    $run_costumer = mysqli_query($con, $insert_clint);

    if($run_costumer){
            echo"<script>alert('Appointment has been scheduled successfully')</script>";
              ?>
<META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost/srm/indexlog.php">
<?php
        }

    else{
            echo"<script>alert('Error Ocured..!')</script>";
        }
}

?>
