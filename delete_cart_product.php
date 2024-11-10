<?php
include 'dbcon.php';

       if (isset($_GET['id'])) {
              $id = $_GET['id'];

              $st = "DELETE FROM `cart` WHERE `id` = '$id'";
              $res = mysqli_query($cn, $st) or die("Not Inserted");
              header('location: http://localhost/cuzincalloy/user/cart.php');
       }

?>