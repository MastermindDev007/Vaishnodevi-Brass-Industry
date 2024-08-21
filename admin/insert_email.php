<?php include 'includes/php/dbcon3.php';?>
<?php

if (isset($_POST['add_email'])) {
     $email = $_POST['email'];
     $status = $_POST['status'];

     $st = "INSERT INTO `email`(`email`, `status`) VALUES ('$email', '$status')";
	$res = mysqli_query($cn, $st) or die("Not Inserted");
	header("location: http://localhost/vaishnodevi/admin/email.php");
}

?>