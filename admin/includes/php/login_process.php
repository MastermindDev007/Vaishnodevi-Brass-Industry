<?php include('dbcon.php'); ?>
<?php session_start();?>
<?php

       if (isset($_POST['login'])) {
              $email = $_POST['email'];
              $password = $_POST['pass'];
       }
       $st = "SELECT * FROM `user` WHERE `password` = '$password' and `email_id` = '$email'";
       $res = mysqli_query($cn, $st) or die ("Not recorded");
      
       $row = mysqli_num_rows($res);
       if ($row == 1) {
              $_SESSION['pass'] = $password;
              header('location:../../dashboard.php');
       }
       else{
              header('location:http://localhost/vaishnodevi/admin/index.php?message=Sorry your username or email id is invalid');
       }
?>