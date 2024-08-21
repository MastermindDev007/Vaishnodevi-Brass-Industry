<?php include 'includes/php/dbcon.php'; ?>
<?php
     $st = "SELECT * FROM `home_page` WHERE `id` = 1";
     $res = mysqli_query($cn, $st) or die("Not Inserted");
     $row = mysqli_fetch_assoc($res);
?>

<?php
     if (isset($_POST['update_home'])) {
          $home_title = $_POST['title'];
          $home_keyword = $_POST['keyword'];
          $home_descriptions = $_POST['descriptions'];
          $home_author = $_POST['author'];
          
          $st = "UPDATE `home_page` SET `home_title`='$home_title', `home_keyword`='$home_keyword', `home_description`='$home_descriptions', `home_author`='$home_author' WHERE `id` = 1";
          $res = mysqli_query($cn, $st) or die("Query Failed");
          header('Location: home_page.php');
     }
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Home || Vaishnodevi Brass Industries</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
     <link rel="stylesheet" href="includes/css/footer.css">
     <link rel="stylesheet" href="includes/css/seo_tools.css">
     <link rel="stylesheet" href="includes/css/header.css">
</head>

<body>
     <?php include 'includes/php/header.php'; ?>
     <div class="tp-title-seo">
          Seo Tools
	</div>
     <div class="SEO">
          <p class="p5">HOME</p>
          <p class="p6">Update Home Details</p>
          <form action="home_page.php" method="post" enctype="multipart/form-data">
               
               <div class="form-group">
                    <label for="Home Title" class="first">Home Title :</label>
                    <input type="text" name="title" class="i1" value="<?php echo isset($row['home_title']) ? $row['home_title'] : '' ?>">
               </div>
               <div class="form-group">
                    <label for="Home Keyword" class="first">Home Keyword :</label>
                    <input type="text" name="keyword" class="i1" value="<?php echo isset($row['home_keyword']) ? $row['home_keyword'] : '' ?>">
               </div>
               <div class="form-group">
                    <label for="Home Descriptions" class="first">Home Descriptions :</label>
                    <input type="text" name="descriptions" class="i1" value="<?php echo isset($row['home_description']) ? $row['home_description'] : '' ?>">
               </div>
               <div class="form-group">
                    <label for="Home Author" class="first">Home Author :</label>
                    <input type="text" name="author" class="i1" value="<?php echo isset($row['home_author']) ? $row['home_author'] : '' ?>">
               </div>
               
               <input type="submit" class="submit" name="update_home" value="UPDATE">
          </form>
     </div>
     <?php include 'includes/php/footer.php'; ?>
     <script src="includes/js/script.js"></script>
     <script src="includes/js/script2.js"></script>
     <script src="includes/js/script3.js"></script>
     <script src="includes/js/script4.js"></script>
     <script src="includes/js/script5.js"></script>
     <script src="includes/js/script6.js"></script>
</body>
</html>