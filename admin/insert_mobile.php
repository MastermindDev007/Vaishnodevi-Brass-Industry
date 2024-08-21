<?php include 'includes/php/dbcon3.php';?>
<?php

if (isset($_POST['add_mobile_number'])) {
     $name = $_POST['name'];
     $mobile_number = $_POST['mob'];
     $status = $_POST['status'];

     $st = "INSERT INTO `mob`(`name`, `number`, `status`) VALUES ('$name', '$mobile_number', '$status')";
	$res = mysqli_query($cn, $st) or die("Not Inserted");
	header("location: http://localhost/vaishnodevi/admin/mobile.php");
}

?>