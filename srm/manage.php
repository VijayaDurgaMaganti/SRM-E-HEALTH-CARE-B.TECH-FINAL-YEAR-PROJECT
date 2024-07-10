<?php
    include("connection.php");
    error_reporting(0);
    session_start();

    if(isset($_POST['submit']))
    {
        $email = $_POST['email_id'];
        $adminid = $_POST['adid'];
        $pwd = $_POST['pswd'];

        $query = "SELECT * FROM admins WHERE email_id='$email' && adid='$adminid' && pswd='$pwd'";
        $data = mysqli_query($con,$query);

        $total = mysqli_num_rows($data);

        // echo $total;

        if($total == 1)
        {

            header('location:admins.php');
            $_SESSION['adid']=$adminid;

        }
        else
        {
            echo "<font color = 'red'>Invalid mail ID or Password";

        }
    }
?>
?>
