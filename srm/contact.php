<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lifecare";

$con = mysqli_connect($servername,$username,$password,$dbname);

if($con){
    echo "Connection ok";
}
else{
    echo "Connection failed".mysqli_connect_error();
}

if(isset($_POST['submit']))
{
        
    $Name=mysqli_real_escape_string($con,$_POST['Name']);	  
    $Email_ID=mysqli_real_escape_string($con,$_POST['Email_ID']);	  
    $Phone=mysqli_real_escape_string($con,$_POST['Phone']);	 	  
    $Subject=mysqli_real_escape_string($con,$_POST['Subject']);	 	 	 	 
    $Message=mysqli_real_escape_string($con,$_POST['Message']);

    $insert_clint="insert into contact(Name,Email_ID,Phone,Subject,Message)

    values('$Name','$Email_ID','$Phone','$Subject','$Message')";
        
    $run_costumer = mysqli_query($con, $insert_clint);
        
    if($run_costumer){
            echo"<script>alert('Message Sent successfully')</script>";
        ?>
<META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost/lifecare/indexlog.php">
<?php
        }
        
    else{
            echo"<script>alert('Error is server.. !')</script>";
        }
}
?>

<!--<p align="center"><a href="http://localhost/lifecare/login.php">login with Your new account</a></p>-->
<!--<p align="center"><a href="http://localhost/miniproject_ssp/deletion.php">View the records</a></p>-->