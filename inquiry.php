<?php include 'admin/includes/php/dbcon2.php'; ?><!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <?php
              $cn = mysqli_connect("localhost", "root", "") or die ("Not connected");
              $db = mysqli_select_db($cn, "vaishnodevi") or die ("Not connected");
              $st1 = "SELECT * FROM `inquiry_page` WHERE 1";
              $res1 = mysqli_query($cn, $st1) or die("Not Inserted");
              while ($fld1 = mysqli_fetch_array($res1)) {
       ?>
              <meta name="description" content="<?php echo $fld1['inquiry_description'];?>">
              <meta name="keywords" content="<?php echo $fld1['inquiry_keyword'];?>">
              <meta name="author" content="<?php echo $fld1['inquiry_author'];?>">
              <title><?php echo $fld1['inquiry_title'];?></title>
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
       <link rel="stylesheet" href="includes/css/inquiry.css">
</head>
<body>
    	<?php include 'includes/php/header_and_footer/header.php'?>
		<div class="breadcrumbs_bg">
			<h3 class="h3">
				Inquiry
			</h3>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li> &nbsp &nbsp 
				<i class="fa-solid fa-angle-right" style="color: #ffffff;"></i> &nbsp &nbsp
				<li class="breadcrumb-item" aria-current="page">Inquiry</li>
			</ol>
		</div>
		<div class="inquiry_form">
			<img src="assets/inquiry_image/imquiry_img1.jpg" class="inquiry_image">
			<span class="tp-section-title-pre">
				Talk To Us
			</span>
			<h3 class="tp-section-title">
				You have and inquiry?
			</h3>
			<p class="fast" style="text-align: justify;">
				Your email will not be published.
			</p>
			<div class="inquiry_form1">
				<form action="#" method="post">
					<input type="text" placeholder="Name Here" name="name" id="name" class="text_field name">
					<input type="number" placeholder="Mob. No. Here" name="number" id="number" class="text_field number">
					<input type="email" placeholder="Email Here" name="email" id="email" class="text_field email">
					<input type="text" placeholder="Subject" name="subject" id="subject" class="text_field subject">
					<input type="text" placeholder="Message" name="message" id="message" class="text_field message">
					<br>
					<input type="submit" value="submit" name="submit" id="submit" class="submit">
				</form>
			</div>
		</div>
		<?php include 'includes/php/header_and_footer/footer.php'?>
</body>
</html>