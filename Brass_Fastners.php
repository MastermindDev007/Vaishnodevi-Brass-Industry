<?php include 'admin/includes/php/dbcon.php'; ?>
<?php include 'admin/includes/php/dbcon2.php'; ?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Product || Vaishnodevi Brass Industries</title>
     <?php
              $st2 = "SELECT * FROM `favicon` WHERE 1";
              $res2 = mysqli_query($cn, $st2) or die("Not Inserted");
              while ($fld2 = mysqli_fetch_array($res2)) {
       ?>
              <link rel="shortcut icon" href="<?php echo "admin/assets/logo/uploads2/" . $fld2['favicon']; ?>" type="image/x-icon">
       <?php 
              }
       ?>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <script src='https://www.google.com/recaptcha/api.js'></script>
     <link rel="stylesheet" href="includes/css/footer.css">
     <link rel="stylesheet" href="includes/css/header.css">
     <link rel="stylesheet" href="includes/css/Brass_Fastners.css">
</head>

<body>
     <?php include 'includes/php/database/dbcon.php' ?>
     <?php include 'includes/php/header_and_footer/header.php' ?>
     <div class="breadcrumbs_bg">
          <h3 class="h3">
               Product
          </h3>
          <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="index.php">Home</a></li> &nbsp &nbsp
               <i class="fa-solid fa-angle-right" style="color: #ffffff;"></i> &nbsp &nbsp
               <li class="breadcrumb-item" aria-current="page">Product</li>
          </ol>
     </div>
     <div class="products">
          <div class="row">
               <?php
               $cn = mysqli_connect("localhost", "root", "") or die ("Not connected");
               $db = mysqli_select_db($cn, "vaishnodevi") or die ("Not connected");
               $st = "SELECT * FROM `product` WHERE category_name=46";
               $res = mysqli_query($cn, $st) or die("Not Inserted");
               while ($fld = mysqli_fetch_array($res)) {
               ?>
                    <div class="card1 shadow">
                         <a href="Brass_Fastnersphp">
                              <img src="<?php echo 'admin/' . $fld['product_image'] ?>" alt="Uploaded images">
                              <h3 class="tp-product-title">
                                   <?php echo $fld['product_name'] ?>
                              </h3>
                         </a>
                    </div>
               <?php
               }
               ?>
          </div>
     </div>
     <?php include 'includes/php/header_and_footer/footer.php' ?>
</body>

</html>