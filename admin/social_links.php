<?php include 'includes/php/dbcon.php'; ?>
<?php
     $st = "SELECT * FROM `social_links` WHERE `id` = 1";
     $res = mysqli_query($cn, $st) or die("Not Inserted");
     $row = mysqli_fetch_assoc($res);
?>

<?php
     if (isset($_POST['update_social_links'])) {
          $facebook = $_POST['facebook'];
          $instagram = $_POST['instagram'];
          $twitter = $_POST['twitter'];
          $linkedin = $_POST['linkedin'];
          
          $st = "UPDATE `social_links` SET `facebook`='$facebook', `instagram`='$instagram', `twitter`='$twitter', `linkedin`='$linkedin' WHERE `id` = 1";
          $res = mysqli_query($cn, $st) or die("Query Failed");
          header('Location: social_links.php');
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
     <link rel="stylesheet" href="includes/css/social_links.css">
     <link rel="stylesheet" href="includes/css/header.css">
</head>

<body>
     <?php include 'includes/php/header.php'; ?>
     <div class="tp-title-seo">
          Social Links
	</div>
     <div class="SEO">
          <p class="p5">SOCIAL LINKS</p>
          <p class="p6">Update Social Links</p>
          <form action="social_links.php" method="post" enctype="multipart/form-data">
               
               <div class="form-group">
                    <label for="FaceBook" class="first">FaceBook :</label>
                    <input type="text" name="facebook" class="i1" value="<?php echo isset($row['facebook']) ? $row['facebook'] : '' ?>">
               </div>
               <div class="form-group">
                    <label for="Instagram" class="first">Instagram :</label>
                    <input type="text" name="instagram" class="i1" value="<?php echo isset($row['instagram']) ? $row['instagram'] : '' ?>">
               </div>
               <div class="form-group">
                    <label for="Twitter" class="first">Twitter :</label>
                    <input type="text" name="twitter" class="i1" value="<?php echo isset($row['twitter']) ? $row['twitter'] : '' ?>">
               </div>
               <div class="form-group">
                    <label for="Linkedin" class="first">Linkedin :</label>
                    <input type="text" name="linkedin" class="i1" value="<?php echo isset($row['linkedin']) ? $row['linkedin'] : '' ?>">
               </div>
               
               <input type="submit" class="submit" name="update_social_links" value="UPDATE">
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