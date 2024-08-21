<?php include('includes/php/dbcon.php');?>

<?php

       if (isset($_GET['id'])) {
              $id = $_GET['id'];

              $st = "DELETE FROM `sub_category` WHERE `id` = '$id'";
              $res = mysqli_query($cn, $st) or die("Not Inserted");
              header('location: http://localhost/vaishnodevi/admin/sub_category.php');
       }

?>