<?php include('includes/php/dbcon3.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
     <link rel="stylesheet" href="includes/css/footer.css">
     <link rel="stylesheet" href="includes/css/dashboard.css">
     <link rel="stylesheet" href="includes/css/header.css">
</head>

<body>
     <?php
     if (isset($_GET['id'])) {
          $id = $_GET['id'];

          $st = "SELECT * FROM `address` WHERE `id` = '$id'";
          $res = mysqli_query($cn, $st) or die("Query Failed");
          $row = mysqli_fetch_assoc($res);
     }
     ?>

     <?php
     if (isset($_POST['update_address'])) {
          $address = $_POST['address'];
          $status = $_POST['status'];

          $st = "UPDATE `address` SET `address`='$address', `status`='$status' WHERE id = '$id'";
          $res = mysqli_query($cn, $st) or die("Query Failed");
          header('Location: http://localhost/vaishnodevi/admin/address.php');
     }
     ?>

     <form action="update_address.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
               <label for="Address" class="first">Address:</label>
               <textarea name="address" class="form-control"><?php echo $row['address']; ?></textarea>
          </div>
          <br>
          <div class="form-group">
               <label for="Status" class="second">Status:</label>
               <input type="number" name="status" class="form-control" value="<?php echo $row['status']; ?>">
          </div>
          <br>
          <input type="submit" class="btn btn-success" name="update_address" value="UPDATE">
     </form>
</body>

</html>