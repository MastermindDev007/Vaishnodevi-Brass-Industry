<?php
    include '../includes/php/dbcon.php';
    
    if (isset($_POST['add_admin'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $role = $_POST['Role'];
    
        $st = "INSERT INTO `user`(`username`, `password`, `email_id`, `role`) VALUES ('$username', '$pass','$email', '$role')";
        $res = mysqli_query($cn, $st);
        header("location: http://localhost/vaishnodevi/admin/dashboard.php");
    }
?>
