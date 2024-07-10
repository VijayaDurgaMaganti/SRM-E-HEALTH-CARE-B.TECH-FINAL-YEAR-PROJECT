<?php
include("connection.php");
error_reporting(0);

$sl_no = $_GET['sl_no'];
$query = "DELETE FROM emergency WHERE sl_no = '$sl_no' ";

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
