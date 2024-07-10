<?php
    include("connection.php");
    error_reporting(0);
    session_start();

    if(isset($_POST['submit']))
    {
        $email = $_POST['email_id'];
        $id = $_POST['dr_id'];
        $pwd = $_POST['pswd'];

        $query = "SELECT * FROM doctors WHERE email_id='$email' && dr_id='$id' && pswd='$pwd'";
        $data = mysqli_query($con,$query);

        $total = mysqli_num_rows($data);

        // echo $total;

        if($total == 1 && $id==MS123)
        {
            header('location:doctor1.php');
            $_SESSION['dr_id']=$id;
        }
        else if($total == 1 && $id==KK123){
          header('location:doctor2.php');
          $_SESSION['dr_id']=$id;
        }
        else if($total == 1 && $id==AL123){
          header('location:doctor3.php');
          $_SESSION['dr_id']=$id;
        }
        else if($total == 1 && $id==BS123){
          header('location:doctor4.php');
          $_SESSION['dr_id']=$id;
        }
        else if($total == 1 && $id==GK123){
          header('location:doctor5.php');
          $_SESSION['dr_id']=$id;
        }
        else if($total == 1 && $id==RR123){
          header('location:doctor6.php');
          $_SESSION['dr_id']=$id;
        }
        else if($total == 1 && $id==CD123){
          header('location:doctor7.php');
          $_SESSION['dr_id']=$id;
        }
        else if($total == 1 && $id==PJ123){
          header('location:doctor8.php');
          $_SESSION['dr_id']=$id;
        }
        else
        {
            echo "<font color = 'red'>Invalid mail ID or Password";

        }
    }
?>
