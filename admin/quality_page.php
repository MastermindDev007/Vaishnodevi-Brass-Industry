<?php include 'includes/php/dbcon.php'; ?>
<?php
     $st = "SELECT * FROM `quality_page` WHERE `id` = 1";
     $res = mysqli_query($cn, $st) or die("Not Inserted");
     $row = mysqli_fetch_assoc($res);
?>

<?php
     if (isset($_POST['update_quality'])) {
          $quality_title = $_POST['title'];
          $quality_keyword = $_POST['keyword'];
          $quality_descriptions = $_POST['descriptions'];
          $quality_author = $_POST['author'];
          
          $st = "UPDATE `quality_page` SET `quality_title`='$quality_title', `quality_keyword`='$quality_keyword', `quality_description`='$quality_descriptions', `quality_author`='$quality_author' WHERE `id` = 1";
          $res = mysqli_query($cn, $st) or die("Query Failed");
          header('Location: quality_page.php');
     }
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>quality || Vaishnodevi Brass Industries</title>
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
          <p class="p5">quality</p>
          <p class="p6">Update quality Details</p>
          <form action="quality_page.php" method="post" enctype="multipart/form-data">
               
               <div class="form-group">
                    <label for="quality Title" class="first">quality Title :</label>
                    <input type="text" name="title" class="i1" value="<?php echo isset($row['quality_title']) ? $row['quality_title'] : '' ?>">
               </div>
               <div class="form-group">
                    <label for="quality Keyword" class="first">quality Keyword :</label>
                    <input type="text" name="keyword" class="i1" value="<?php echo isset($row['quality_keyword']) ? $row['quality_keyword'] : '' ?>">
               </div>
               <div class="form-group">
                    <label for="quality Descriptions" class="first">quality Descriptions :</label>
                    <input type="text" name="descriptions" class="i1" value="<?php echo isset($row['quality_description']) ? $row['quality_description'] : '' ?>">
               </div>
               <div class="form-group">
                    <label for="quality Author" class="first">quality Author :</label>
                    <input type="text" name="author" class="i1" value="<?php echo isset($row['quality_author']) ? $row['quality_author'] : '' ?>">
               </div>
               
               <input type="submit" class="submit" name="update_quality" value="UPDATE">
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