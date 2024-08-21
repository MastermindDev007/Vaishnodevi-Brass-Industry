<?php include 'includes/php/dbcon3.php';?>
<?php

if (isset($_POST['add_address'])) {
     $address = $_POST['address'];
     $status = $_POST['status'];

     $st = "INSERT INTO `address`(`address`, `status`) VALUES ('$address', '$status')";
	$res = mysqli_query($cn, $st) or die("Not Inserted");
	header("location: http://localhost/vaishnodevi/admin/address.php");
}

?>