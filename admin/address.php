<?php include 'includes/php/dbcon3.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Contact || Vaishnodevi Brass Industries</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
     <link rel="stylesheet" href="includes/css/footer.css">
     <link rel="stylesheet" href="includes/css/contact.css">
     <link rel="stylesheet" href="includes/css/header.css">
</head>

<body>
     <?php include 'includes/php/header.php'; ?>
     <div class="address">
          <div class="form shadow-lg">
               <h3 class="tp-title-pre">Address</h3>
               <p class="tp-title">Add Address</p>
               <form action="insert_address.php" method="post">
                    <input type="text" name="address" class="form-control" placeholder="Enter Address">
                    <input type="number" name="status" class="form-control" placeholder="Enter Status Number (1 or 0)">
                    <input type="submit" class="submit1 " name="add_address" value="ADD">
               </form>
          </div>
          <table class="table table-hover table-borderd table-striped shadow-lg">
               <thead>
                    <tr>
                         <th scope="col">ID</th>
                         <th scope="col">Address</th>
                         <th scope="col">Status</th>
                         <th scope="col">Update</th>
                         <th scope="col">Delete</th>
                    </tr>
               </thead>
               <tbody>
                    <?php
                         $st3 = "SELECT * FROM `address`";
                         $res3 = mysqli_query($cn, $st3) or die("Not Inserted");
                         while ($fld3=mysqli_fetch_array($res3)) {
                    ?>
                         <tr>
                              <td><p style="text-align: center;"><?php echo $fld3['id']?></p></td>
                              <td><?php echo $fld3['address']?></td>
                              <td>
                                   <div class="form-lg-check form-switch">
                                        <input class="form-check-input" <?php if ($fld3["status"] == '1') { echo "checked"; } ?> onclick="toggleStatus(<?php echo $fld3['id'];?>)" type="checkbox" id="check">
                                   </div>
                              </td>
                              <td><a href="update_address.php?id=<?php echo $fld3['id']?>" class="btn btn-success">Update</a></td>
                              <td><a href="delete_address.php?id=<?php echo $fld3['id']?>" class="btn btn-danger">Delete</a></td>
                         </tr>
                    <?php
                         }
                    ?>
               </tbody>
          </table>
     </div>
     <?php include 'includes/php/footer.php'; ?>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script src="includes/js/script.js"></script>
     <script src="includes/js/script2.js"></script>
     <script src="includes/js/script3.js"></script>
     <script src="includes/js/script4.js"></script>
     <script src="includes/js/script5.js"></script>
     <script src="includes/js/script6.js"></script>
     <script src="includes/js/script9.js"></script> <!--for address js-->
</body>

</html>