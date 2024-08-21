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
                     
                     $st = "SELECT * FROM `category` WHERE `id` = '$id'";
                     $res = mysqli_query($cn, $st) or die("Query Failed");
                     $row = mysqli_fetch_assoc($res);
              }
       ?>

       <?php
              if (isset($_POST['update_category'])) {
                     $category_name = $_POST['category_name'];
                     $sub_category = $_POST['sub_category'];
                     $description = $_POST['description'];

                     // Handle file upload
                     if (isset($_FILES['category_image']) && $_FILES['category_image']['error'] == 0) {
                            $target_dir = "uploads/";
                            $target_file = $target_dir . basename($_FILES["category_image"]["name"]);
                            move_uploaded_file($_FILES["category_image"]["tmp_name"], $target_file);
                            $category_image = $target_file;
                     } else {
                            $category_image = $row['category_image']; // Keep existing image if no new image is uploaded
                     }
                     
                     $st = "UPDATE `category` SET `category_name`='$category_name', `sub_category`='$sub_category', `category_image`='$category_image', `description`='$description' WHERE id = '$id'";
                     $res = mysqli_query($cn, $st) or die("Query Failed");
                     header('Location: category.php');
              }
       ?>

       <form action="update_category.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                     <label for="Category Name" class="first">Category Name:</label>
                     <input type="text" name="category_name" class="form-control" value="<?php echo $row['category_name']; ?>">
              </div>
              <br>
              <div class="form-group">
                     <label for="Sub-Category Name" class="second">Sub-Category Name:</label>
                     <select name="sub_category" id="Sub-Category_Name" class="form-control">
                            <option value="Select Sub-Category">Select Sub-Category</option>
                            <option value="Yes" <?php echo ($row['sub_category'] == "Yes") ? 'selected' : ''; ?>>Yes</option>
                            <option value="No" <?php echo ($row['sub_category'] == "No") ? 'selected' : ''; ?>>No</option>
                     </select>
              </div>
              <br>
              <div class="form-group">
                     <label for="Category Image" class="third">Category Image:</label>
                     <input type="file" name="category_image" class="form-control">
                     <?php if ($row['category_image']): ?>
                            <img src="<?php echo $row['category_image']; ?>" alt="Category Image" style="max-width: 200px; margin-top: 10px;">
                     <?php endif; ?>
              </div>
              <br>
              <div class="form-group">
                     <label for="Description" class="fourth">Description:</label>
                     <textarea name="description" class="form-control"><?php echo $row['description']; ?></textarea>
              </div>
              <br>
              <input type="submit" class="btn btn-success" name="update_category" value="UPDATE">
       </form>
</body>
</html>
