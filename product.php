<?php include 'admin/includes/php/dbcon2.php'; ?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <?php
              $cn = mysqli_connect("localhost", "root", "") or die ("Not connected");
              $db = mysqli_select_db($cn, "vaishnodevi") or die ("Not connected");
              $st1 = "SELECT * FROM `product_page` WHERE 1";
              $res1 = mysqli_query($cn, $st1) or die("Not Inserted");
              while ($fld1 = mysqli_fetch_array($res1)) {
       ?>
              <meta name="description" content="<?php echo $fld1['product_description'];?>">
              <meta name="keywords" content="<?php echo $fld1['product_keyword'];?>">
              <meta name="author" content="<?php echo $fld1['product_author'];?>">
              <title><?php echo $fld1['product_title'];?></title>
       <?php
              }
       ?>
			<?php
			$cn = mysqli_connect("localhost", "root", "") or die ("Not connected");
			$db = mysqli_select_db($cn, "vaishnodevi_pages") or die ("Not connected");
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
     <link rel="stylesheet" href="includes/css/product.css">
</head>
<body>
	<?php include 'includes/php/header_and_footer/header.php'?>
	<div class="breadcrumbs_bg">
		<h3 class="h3">
			Category
		</h3>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="index.php">Home</a></li> &nbsp &nbsp 
			<i class="fa-solid fa-angle-right" style="color: #ffffff;"></i> &nbsp &nbsp
			<li class="breadcrumb-item" aria-current="page">Category</li>
		</ol>
	</div>
	<div class="product_category">
		<!-- <div class="row"> -->
               <?php
               // // include 'dbcon.php';
               // $st = "SELECT * FROM `category` WHERE 1";
               // $res = mysqli_query($cn, $st) or die("Not Inserted");
               // while ($fld = mysqli_fetch_array($res)) {
               ?>
                      <!-- <div class="card1 shadow"> -->
                             <!-- <a href="Brass_Plumbing_Parts.php"> -->
                                    <!-- <img src="<?php // echo 'admin/' . $fld['category_image'] ?>" alt="Uploaded images"> -->
                                    <!-- <h3 class="tp-product-title"> -->
                                           <?php // echo $fld['category_name'] ?>
                                   	<!-- </h3> -->
                             <!-- </a> -->
                      <!-- </div> -->
               <?php
               // }
               ?>
          <!-- </div> -->
		<div class="row">
			<div class="card1 card2 shadow">
			<a href="Brass_Plumbing_Parts.php">
				<img src="assets/product_image/category_image/Brass Sanitary Parts 2.jpg" alt="">
				<h3 class="tp-product-title">
					Brass Plumbing Parts
				</h3>
			</a>
			</div>
			<div class="card1 card3 shadow">
				<a href="Brass_Bush.php">
					<img src="assets/product_image/category_image/Brass Bush 1.jpg" alt="">
					<h3 class="tp-product-title">
						Brass Bush
					</h3>
				</a>
			</div>
			<div class="card1 card4 shadow">
			<a href="Brass_Fastners.php">	
				<img src="assets/product_image/category_image/Brass Fastners 2.jpg" alt="">
				<h3 class="tp-product-title">
					Brass Fastners
				</h3>
			</a>
			</div>
			<div class="card1 card5 shadow">
			<a href="Brass_Inserts.php">
				<img src="assets/product_image/category_image/Brass Insert.jpg" alt="">
				<h3 class="tp-product-title">
					Brass Inserts
				</h3>
			</a>
			</div>
			<div class="card1 card7 shadow">
			<a href="Electrical_Fitting.php">
				<img src="assets/product_image/category_image/Electric Fittings 1.jpg" alt="">
				<h3 class="tp-product-title">
					Electrical Fitting
				</h3>
			</a>
			</div>
			<div class="card1 card8 shadow">
			<a href="Brass_Anchor.php">
				<img src="assets/product_image/category_image/Brass Anchor 3.jpg" alt="">
				<h3 class="tp-product-title">
					Brass Anchor
				</h3>
			</a>
			</div>
			<div class="card1 card9 shadow">
				<a href="Brass_flare_nut.php">
					<img src="assets/product_image/category_image/Air-Conditioner.jpg" alt="">
					<h3 class="tp-product-title">
						Brass flare nut
					</h3>
				</a>
			</div>
			<div class="card1 card10 shadow">
			<a href="Brass_Hose_Brab.php">
				<img src="assets/product_image/category_image/Air-Conditioner.jpg" alt="">
				<h3 class="tp-product-title">
					Brass Hose Brab
				</h3>
			</a>
			</div>
		</div>
	</div>
	<?php include 'includes/php/header_and_footer/footer.php'?>
</body>
</html>