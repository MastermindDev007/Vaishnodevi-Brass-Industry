<?php include 'includes/php/dbcon.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Brochure || Vaishnodevi Brass Industries</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
     <link rel="stylesheet" href="includes/css/footer.css">
     <link rel="stylesheet" href="includes/css/brochure.css">
     <link rel="stylesheet" href="includes/css/header.css">
</head>

<body>
     <?php include 'includes/php/header.php'; ?>
     <div class="logo">
          <h3 class="tp-title-pre">Brochure</h3>
          <p class="tp-title">Add Brochure</p>
          <?php
               $st = "SELECT * FROM `brochure` WHERE 1";
               $res = mysqli_query($cn, $st) or die("Not Inserted");
               while ($fld = mysqli_fetch_array($res)) {
               ?>
                    <embed src="assets/header/uploads/<?php echo $fld['brochure']; ?>" type="application/pdf" width="200" height="200">
                    <!-- <img src="assets/header/uploads/<?php //echo $fld['brochure']; ?>" alt="Uploaded PDF" width="150px" class="uploaded_image"> -->
                    <form action="update_brochure.php" method="post" enctype="multipart/form-data">
                         <input type="hidden" name="stud_id" value="<?php echo $fld["id"]; ?>">
                         <input type="file" name="new_pdf" id="pdf" class="i1">
                         <input type="hidden" name="old_pdf" value="<?php echo $fld["brochure"]; ?>" class="i1">
                         <input type="submit" class="submit" name="update_brochure" value="UPDATE">
                    </form>
               <?php
               }
          ?>
     </div>
     <?php include 'includes/php/footer.php'; ?>
     <script src="includes/js/script.js"></script>
     <script src="includes/js/script2.js"></script>
     <script src="includes/js/script3.js"></script>
</body>

</html>