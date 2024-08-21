<?php include 'admin/includes/php/dbcon2.php'; ?><!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <?php
              $cn = mysqli_connect("localhost", "root", "") or die ("Not connected");
              $db = mysqli_select_db($cn, "vaishnodevi") or die ("Not connected");
              $st1 = "SELECT * FROM `quality_page` WHERE 1";
              $res1 = mysqli_query($cn, $st1) or die("Not Inserted");
              while ($fld1 = mysqli_fetch_array($res1)) {
       ?>
              <meta name="description" content="<?php echo $fld1['quality_description'];?>">
              <meta name="keywords" content="<?php echo $fld1['quality_keyword'];?>">
              <meta name="author" content="<?php echo $fld1['quality_author'];?>">
              <title><?php echo $fld1['quality_title'];?></title>
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
       <link rel="stylesheet" href="includes/css/footer.css">
       <link rel="stylesheet" href="includes/css/header.css">
       <link rel="stylesheet" href="includes/css/quality.css">
</head>
<body>
    	<?php include 'includes/php/header_and_footer/header.php'?>
		<div class="breadcrumbs_bg">
			<h3 class="h3">
				Quality
			</h3>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li> &nbsp &nbsp 
				<i class="fa-solid fa-angle-right" style="color: #ffffff;"></i> &nbsp &nbsp
				<li class="breadcrumb-item" aria-current="page">Quality</li>
			</ol>
		</div>
		<div class="quality_body">
			<div class="Commitment">
			<?php
                            $cn = mysqli_connect("localhost", "root", "") or die("Not connected");
                            $db = mysqli_select_db($cn, "vaishnodevi_pages") or die("Not connected");
                            $st3 = "SELECT * FROM `others` WHERE 1";
                            $res3 = mysqli_query($cn, $st3) or die("Not Inserted");
                            while ($fld3 = mysqli_fetch_array($res3)) {
                     ?>
                     <span class="tp-section-title-pre">
                            <?php echo $fld3['comp_name']?>
                     </span>
                     <?php 
                            }
                     ?>
				<h3 class="tp-section-title">
					Excellence in Brass: Our Commitment to Quality
				</h3>
				<p class="fast" style="text-align: justify;">
					At Vaishnodevi Brass Industries, quality isn't just a goal; it's ingrained in every facet of our operations. Our unwavering commitment to excellence is evident from the moment raw materials arrive at our state-of-the-art facilities. We employ cutting-edge technology and meticulous inspection protocols to ensure the purity and integrity of our brass alloys. This dedication to quality extends throughout the entire manufacturing process, from the precise crafting of our brass products to the final inspection phase.
				</p>
				<p class="fast" style="text-align: justify;">
					Our reputation for exceptional quality is not merely a result of stringent processes; it's a reflection of our ethos. We understand that quality transcends the tangible attributes of a product; it's about reliability, consistency, and exceeding expectations. We take pride in delivering brass solutions that not only meet industry standards but also set new benchmarks.
				</p>
				<img src="assets/quality_image/quality_img2.jpg" class="tp-section-img2">
				<img src="assets/quality_image/quality_img1.jpg" class="tp-section-img1">
			</div>
			<div class="Quality_Control">
			<?php
                            $cn = mysqli_connect("localhost", "root", "") or die("Not connected");
                            $db = mysqli_select_db($cn, "vaishnodevi_pages") or die("Not connected");
                            $st3 = "SELECT * FROM `others` WHERE 1";
                            $res3 = mysqli_query($cn, $st3) or die("Not Inserted");
                            while ($fld3 = mysqli_fetch_array($res3)) {
                     ?>
                     <span class="tp-section-title-pre">
                            <?php echo $fld3['comp_name']?>
                     </span>
                     <?php 
                            }
                     ?>
				<h3 class="tp-section-title">
					Quality Control: From Raw Materials to Finished Products
				</h3>
				<p class="fast" style="text-align: justify;">
					Quality control lies at the heart of our operations at Vaishnodevi Brass Industries. We understand that producing superior brass products is not a matter of chance but a result of meticulous planning and rigorous processes. Our commitment to quality control begins with the careful selection of raw materials, where every batch undergoes rigorous testing and analysis to ensure it meets our stringent standards.Our devotion to quality control isn't just about meeting industry benchmarks; it's about exceeding them.
				</p>
				<img src="assets/quality_image/quality_img3.jpg" class="tp-section-img1 shadow p-3 mb-5 bg-body">
			</div>
			<div class="Quality_Assurance">
				<?php
					$cn = mysqli_connect("localhost", "root", "") or die("Not connected");
					$db = mysqli_select_db($cn, "vaishnodevi_pages") or die("Not connected");
					$st3 = "SELECT * FROM `others` WHERE 1";
					$res3 = mysqli_query($cn, $st3) or die("Not Inserted");
					while ($fld3 = mysqli_fetch_array($res3)) {
                ?>
                <span class="tp-section-title-pre">
                            <?php echo $fld3['comp_name']?>
                </span>
                <?php 
                            }
                ?>
				<h3 class="tp-section-title">
					Quality Assurance
				</h3>
				<p class="fast" style="text-align: justify;">
					Quality Assurance is an integral part of Vaishnodevi Brass Industries.
				</p>
				<ul>
					<li style="text-align: justify;" class="li1">
						<span>
							<i class="fa-solid fa-angle-right" style="color: white;"></i>
						</span>
						We ensure that we are able to deliver high quality products to our customers according to their need. All our valued customers have awarded us consistently ensuring the high quality of our products. 
					</li>
					<li style="text-align: justify;" class="li2">
						<span>
							<i class="fa-solid fa-angle-right" style="color: white;"></i>
						</span>
						To meet the global demand we take care at every stage right from raw material purchase to finished goods. Our quality assurance team is trained and well experienced.
					</li>
					<li style="text-align: justify;" class="li3">
						<span>
							<i class="fa-solid fa-angle-right" style="color: white;"></i>
						</span>
						To achieve the maximum standard we continuously monitors the products and user requirements right from the production stage up to the final dispatch.
					</li>
				</ul>
				<img src="assets/quality_image/quality_img4.jpg" class="tp-section-img1">
			</div>
		</div>
	<?php include 'includes/php/header_and_footer/footer.php'?>
</body>
</html>