<?php 
    include 'includes/php/database/dbcon.php';
    session_start();
?>
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
     <link rel="stylesheet" href="includes/css/product1.css">
</head>

<body>
     <?php include 'includes/php/header_and_footer/header.php' ?>
     <div class="breadcrumb-section">
            <h1>Brass Fastners</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb_item"><a href="index.php">Home</a>&nbsp/&nbsp</li>
                <li class="breadcrumb_item active">Product</li>
            </ol>
       </div>
       
       <div class="product-section">
            <?php
                $cn = mysqli_connect("localhost", "root", "") or die ("Not connected");
                $db = mysqli_select_db($cn, "vaishnodevi") or die ("Not connected");
                $st3 = "SELECT * FROM `product` WHERE `category_name` = 46";
                $res3 = mysqli_query($cn, $st3) or die("Not Inserted");
                while ($fld3 = mysqli_fetch_array($res3)) {
            ?>
            <div class="product-body">
                <div class="tp-product-img">
                    <img src="<?php echo 'admin/' . $fld3['product_image'] ?>">
                </div>
                <div class="tp-product-title">
                    <span class="price">
                        ₹ <?php echo $fld3['price'] ?>
                    </span>
                    <br>
                    <span class="product-name">
                    <?php echo $fld3['product_name'] ?>
                    </span>
                    <!-- Modal Button -->
                    <button class="open-modal-btn" type="button" data-product-id="<?php echo $fld3['id']; ?>">Buy Now</button>
                </div>
            </div>
            <!-- Modal Structure -->
            <div id="myModal-<?php echo $fld3['id']; ?>" class="modal">
                <div class="modal-content">
                    <span class="close" data-product-id="<?php echo $fld3['id']; ?>">&times;</span>
                    <h2>Product Details</h2>
                    <p>
                        <?php echo $fld3['description'] ?>
                    </p>
                    <form action="cart.php?action=add&id=<?php echo $fld3['id']; ?>" method="post">
                            <select name="qty" class="form-select-sm">
                                   <?php for ($i=1; $i <= 10 ; $i++) { ?>
                                   <option><?php echo $i; ?></option>    
                                   <?php } ?>
                            </select>
                            <button type="submit" class="modal-btn">Add to Cart</button>
                    </form>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
       <?php include 'includes/php/header_and_footer/footer.php' ?>
       <!-- bootstrap js -->
       <!-- <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script> -->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

       <!-- font awesome js -->
       <script src="https://kit.fontawesome.com/your-fontawesome-kit-id.js" crossorigin="anonymous"></script>

       <!-- header scroll -->
       <script src="includes/js/modal_btn.js"></script>
</body>

</html>