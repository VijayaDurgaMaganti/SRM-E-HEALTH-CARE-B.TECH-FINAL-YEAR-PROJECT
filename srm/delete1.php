<?php
include("connection.php");
error_reporting(0);

$username = $_GET['username'];
$query = "DELETE FROM clientlogins WHERE username = '$username' ";

$data = mysqli_query($con , $query);

if($data){
     echo"<script>alert('Data deleted successful')</script>";
          ?>
<META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost/srm/admins.php">
<?php
}
else{
     echo"<script>alert('deletion faild')</script>";
}

?>
