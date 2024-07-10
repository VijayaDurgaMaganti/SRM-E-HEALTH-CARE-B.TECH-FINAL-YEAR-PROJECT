<?php
include("connection.php");
error_reporting(0);

$date = $_GET['date'];
$query = "DELETE FROM appointments WHERE date = '$date' ";

$data = mysqli_query($con , $query);

if($data){
     echo"<script>alert('Data deleted successfully')</script>";
          ?>
<META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost/srm/admins.php">
<?php
}
else{
     echo"<script>alert('deletion faild')</script>";
}

?>
