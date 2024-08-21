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
            $st1 = "SELECT * FROM `contact_us_page` WHERE 1";
            $res1 = mysqli_query($cn, $st1) or die("Not Inserted");
            while ($fld1 = mysqli_fetch_array($res1)) {
     ?>
            <meta name="description" content="<?php echo $fld1['contact_us_description'];?>">
            <meta name="keywords" content="<?php echo $fld1['contact_us_keyword'];?>">
            <meta name="author" content="<?php echo $fld1['contact_us_author'];?>">
            <title><?php echo $fld1['contact_us_title'];?></title>
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
     <link rel="stylesheet" href="includes/css/Contact.css">
</head>
<body>
		<?php include 'includes/php/header_and_footer/header.php'?>
		<div class="breadcrumbs_bg">
			<h3 class="h3">
				Contact
			</h3>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li> &nbsp &nbsp 
				<i class="fa-solid fa-angle-right" style="color: #ffffff;"></i> &nbsp &nbsp
				<li class="breadcrumb-item" aria-current="page">Contact</li>
			</ol>
		</div>
		<div class=" contact_info">
			<div class="contact_info1">
				<?php
					$cn = mysqli_connect("localhost", "root", "") or die ("Not connected");
					$db = mysqli_select_db($cn, "vaishnodevi_contact") or die ("Not connected");
					$st1 = "SELECT * FROM `mob`";
					$res1 = mysqli_query($cn, $st1) or die("Not Inserted");
				?>
				<div class="contact-container">
					<?php
					     while ($fld1 = mysqli_fetch_array($res1)) {
					?>
					<div class="tp-contact-map-info shadow p-3 bg-body">
						<div class="tp-contact-map-info-wrapper d-flex">
							<div class="tp-contact-map-info-icon">
								<img src="assets/contact_image/user.png">
							</div>
							<div class="tp-contact-map-info-content">
								<h3 class="tp-contact-map-info-title">Contact</h3>
								<a href="tel: 7779092005">
									<?php
										if ($fld1['status'] == "1") {
										echo $fld1['name'];
									?>
									<br>
									<?php
										echo $fld1['number'];
										}
										else {
										echo " ";
										}
									?>
								</a>
							</div>
						</div>
					</div>
					<?php 
					    }
					?>
				</div>
				<div class="tp-contact-map-info mr-30 shadow p-3 mb-5 bg-body contact-info5">
					<div class="tp-contact-map-info-wrapper d-flex">
						<div class="tp-contact-map-info-icon">
							<img src="assets/contact_image/mail.png">
						</div>
						<div class="tp-contact-map-info-content">
							<h3 class="tp-contact-map-info-title">Email</h3>
							<a href="mailto:devndavda@gmail.com">
								<?php
       							     $cn = mysqli_connect("localhost", "root", "") or die ("Not connected");
       							     $db = mysqli_select_db($cn, "vaishnodevi_contact") or die ("Not connected");
       							     $st2 = "SELECT * FROM `email`";
       							     $res2 = mysqli_query($cn, $st2) or die("Not Inserted");
       							     while ($fld2 = mysqli_fetch_array($res2)) {
										if ($fld2['status'] == "1") {
											echo $fld2['email'];
										}
										else {
											echo " ";
										}
									}
								?>
							</a>
						</div>
					</div>
				</div>
				<div class="tp-contact-map-info mr-30 shadow p-3 mb-5 bg-body contact-info6">
					<div class="tp-contact-map-info-wrapper d-flex">
						<div class="tp-contact-map-info-icon">
							<img src="assets/contact_image/home-address.png">
						</div>
						<div class="tp-contact-map-info-content">
							<h3 class="tp-contact-map-info-title">Location</h3>
								<?php
									$cn = mysqli_connect("localhost", "root", "") or die ("Not connected");
									$db = mysqli_select_db($cn, "vaishnodevi_contact") or die ("Not connected");
									$st3 = "SELECT * FROM `address`";
									$res3 = mysqli_query($cn, $st3) or die("Not Inserted");
									while ($fld3 = mysqli_fetch_array($res3)) {
										if ($fld3['status'] == "1") {
											echo $fld3['address'];
										}
										else {
											echo " ";
										}
									}
								?>
						</div>
					</div>
				</div>
			</div>
			<div class="contact_info_map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d714.0513420124162!2d70.05278765858053!3d22.410593033128603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e0!3m2!1sen!2sin!4v1709875373179!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="shadow bg-body"></iframe>
			</div>
			<div class="contact_form shadow">
				<h3 class="tp-section-title">
					Connect with 
				</h3>
				<?php
                            $cn = mysqli_connect("localhost", "root", "") or die("Not connected");
                            $db = mysqli_select_db($cn, "vaishnodevi_pages") or die("Not connected");
                            $st3 = "SELECT * FROM `others` WHERE 1";
                            $res3 = mysqli_query($cn, $st3) or die("Not Inserted");
                            while ($fld3 = mysqli_fetch_array($res3)) {
                     ?>
                     <h3 class="tp-section-title">
                            <?php echo $fld3['comp_name']?>
					   </h3>
                     <?php 
                            }
                     ?>
				<form action="#" method="post">
					<input type="text" placeholder="Name Here" name="name" id="name" class="text_field name">
					<input type="email" placeholder="Email Here" name="email" id="email" class="text_field email">
					<input type="number" placeholder="Mob. No. Here" name="number" id="number" class="text_field number">
					<input type="text" placeholder="Subject" name="subject" id="subject" class="text_field subject">
					<input type="text" placeholder="Message" name="message" id="message" class="text_field message">
					<br>
					<input type="submit" value="submit" name="submit" id="submit" class="submit">
					<!-- <div class="g-recaptcha"data-sitekey="6Ldbdg0TAAAAAI7KAf72Q6uagbWzWecTeBWmrCpJ"></div> -->
				</form>
			</div>
		</div>
		<?php include 'includes/php/header_and_footer/footer.php'?>
</body>
</html>