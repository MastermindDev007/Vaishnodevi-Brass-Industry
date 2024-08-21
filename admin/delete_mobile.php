<?php include('includes/php/dbcon3.php');?>

<?php

       if (isset($_GET['id'])) {
              $id = $_GET['id'];

              $st = "DELETE FROM `mob` WHERE `id` = '$id'";
              $res = mysqli_query($cn, $st) or die("Not Inserted");
              header('location: http://localhost/vaishnodevi/admin/mobile.php');
       }

?>