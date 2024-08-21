<?php include('includes/php/dbcon.php'); ?>
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
                     
                     $st = "SELECT * FROM `sub_category` WHERE `id` = '$id'";
                     $res = mysqli_query($cn, $st) or die("Query Failed");
                     $row = mysqli_fetch_assoc($res);
              }
       ?>

       <?php
              if (isset($_POST['update_sub_category'])) {
                     $sub_category_name = $_POST['sub_category_name'];
                     $category_name = $_POST['category_name'];
                     $description = $_POST['description'];
                     
                     // Handle file upload
                     if (isset($_FILES['sub_category_image']) && $_FILES['sub_category_image']['error'] == 0) {
                            $target_dir = "uploads/";
                            $target_file = $target_dir . basename($_FILES["sub_category_image"]["name"]);
                            move_uploaded_file($_FILES["sub_category_image"]["tmp_name"], $target_file);
                            $sub_category_image = $target_file;
                     } else {
                            $sub_category_image = $row['sub_category_image']; // Keep existing image if no new image is uploaded
                     }
                     
                     $st = "UPDATE `sub_category` SET `sub_category_name`='$sub_category_name', `category_name`='$category_name', `sub_category_image`='$sub_category_image', `sub_cat_description`='$description' WHERE `id` = '$id'";
                     $res = mysqli_query($cn, $st) or die("Update Failed");
                     header('location: http://localhost/VAISHNODEVI_ADMIN_PANEL/sub_category.php');
              }
       ?>

       <form action="update_sub_category.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                     <label for="Sub-Category Name" class="first">Sub-Category Name:</label>
                     <input type="text" name="sub_category_name" class="form-control" value="<?php echo $row['sub_category_name'] ?>">
              </div>
              <br>
              <div class="form-group">
                     <label for="Category Name" class="second">Category Name:</label>
                     <select name="category_name" id="category_name" class="form-control">
                            <option value="Select Category">Select Category</option>
                            <?php
                                   $st = "SELECT `id`, `category_name` FROM `category` WHERE `sub_category` = 'Yes'";
                                   $res = mysqli_query($cn, $st) or die("Query Failed");
                                   while ($fld = mysqli_fetch_array($res)) {
                            ?>
                                   <option value="<?php echo $fld['id'] ?>" <?php echo ($fld['id'] == $row['category_name']) ? 'selected' : ''; ?>><?php echo $fld['category_name'] ?></option>
                            <?php
                                   }
                            ?>
                     </select>
              </div>
              <br>
              <div class="form-group">
                     <label for="Sub-Category Image" class="third">Sub-Category Image:</label>
                     <input type="file" name="sub_category_image" class="form-control">
                     <img src="<?php echo $row['sub_category_image'] ?>" alt="Sub Category Image" width="100">
              </div>
              <br>
              <div class="form-group">
                     <label for="Description" class="fourth">Description:</label>
                     <textarea name="description" class="form-control"><?php echo $row['sub_cat_description'] ?></textarea>
              </div>
              <br>
              <input type="submit" class="btn btn-success" name="update_sub_category" value="UPDATE">
       </form>
</body>
</html>
