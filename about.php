<?php include 'admin/includes/php/dbcon2.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <?php
              $cn = mysqli_connect("localhost", "root", "") or die ("Not connected");
              $db = mysqli_select_db($cn, "vaishnodevi") or die ("Not connected");
              $st1 = "SELECT * FROM `about_page` WHERE 1";
              $res1 = mysqli_query($cn, $st1) or die("Not Inserted");
              while ($fld1 = mysqli_fetch_array($res1)) {
       ?>
              <meta name="description" content="<?php echo $fld1['about_description'];?>">
              <meta name="keywords" content="<?php echo $fld1['about_keyword'];?>">
              <meta name="author" content="<?php echo $fld1['about_author'];?>">
              <title><?php echo $fld1['about_title'];?></title>
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
       <link rel="stylesheet" href="includes/css/about.css">
</head>
<body>
	<?php include 'includes/php/header_and_footer/header.php'?>
	<div class="breadcrumbs_bg">
		<h3 class="h3">
			About Us
		</h3>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li> &nbsp &nbsp 
				<i class="fa-solid fa-angle-right" style="color: #ffffff;"></i> &nbsp &nbsp
				<li class="breadcrumb-item" aria-current="page">About</li>
			</ol>
	</div>
	<div class="brass_beyond_boundries">
		<img src="assets/home_image/experience1.jpg" class="exp1">
       	<div class="tp-about-counter">
       	       <div class="tp-about-counter-inner d-flex align-item-center">
       	              <div class="tp-about-counter-content container">
       	                     <h4 class="tp-about-counter-title">
       	                            <span class="purecounter" data-purecounter-duration="0" pure-datacounter-end="15">
       	                                   15+
       	                            </span>
       	                     </h4>
       	                     <p>Years Of Experience</p>
       	              </div>
       	       </div>
       	</div>
       	<img src="assets/home_image/experience2.jpg" class="exp2">
       	<img src="assets/home_image/exp.jpg" class="exp_image">
	
       	<div class="tp-about-wrapper">
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
       	              Brass, Beyond Boundries
       	       </h3>
       	       <p class="desc1" style="text-align: justify;">
				At Vaishnodevi Brass Industries, our legacy in the world of brass craftsmanship spans
       	              generations. Founded with a vision to blend tradition with innovation, we have embarked
       	              on a relentless journey to craft brass excellence. Our artisans are the guardians of this
				ancient art, infusing each piece with their expertise and passion. We take pride in being
				custodians of a craft that has adorned homes, businesses, and cultures for centuries.
       	       </p>
       	       <p class="desc2" style="text-align: justify;">
				Our commitment goes beyond the allure of brass; it's a commitment to you, our valued
				customers. We're dedicated to delivering not just products, but promises of quality,
				durability, and craftsmanship. Our state-of-the-art facilities, rigorous quality control, and
				customer-centric approach have earned us the trust of clients worldwide. As we continue
				to evolve and shape the future of brass, we invite you to explore our journey, share in
				our passion, and become a part of the Vaishnodevi Brass Industries story.
       	       </p> 
       	</div>
	</div>
	<div class="pioneering_excellence_through_innovation">
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
		<h3 class="tp-section-title">Pioneering Excellence Through Innovation</h3>
		<div class="box1">
		  	<div class="card card1">
		  	  	<div class="card-body">
					<div class="card-image">
						<img src="assets/about_image/pc.png">
					</div>
		  	  	  	<h3 class="card-title">Mission</h3>
					<p class="card-text" style="text-align: justify;">At Vaishnodevi Brass Industries, our mission is to be the forefront of brass craftsmanship, delivering exceptional quality and innovation to our customers. We are committed to preserving the timeless traditions of brass artistry while pushing the boundaries of what's possible.</p>
		  	  	</div>
		  	</div>
		  	<div class="card card2">
		  	  	<div class="card-body">
					<div class="card-image">
						<img src="assets/about_image/machine-repair.png">
					</div>
		  	  	  	<h5 class="card-title">Vision</h5>
		  	  	  	<p class="card-text" style="text-align: justify;">Our vision is to be the global leader in the brass industry, setting new standards for excellence and sustainability. We aspire to be the first choice for clients seeking precision, reliability, and aesthetics in brass products. We envision a future where our creations continue to inspire</p>
		  	  	</div>
		  	</div>
		  	<div class="card card3">
		  	  	<div class="card-body">
					<div class="card-image">
						<img src="assets/about_image/open-laptop.png">
					</div>
		  	  	  	<h5 class="card-title">Core Values</h5>
		  	  	  	<p class="card-text" style="text-align: justify;">At Vaishnodevi Brass Industries, our core values are the compass that guides our daily actions and shapes our long-term vision. Quality Excellence is at the heart of everything we do. We believe that craftsmanship is an art form, and our artisans pour their expertise and passion into each creation.</p>
		  	  	</div>
		  	</div>
		</div>
	</div>
	<div class="about_faq">
		<img src="assets/about_image/faq-img2.jpg" class="about_faq_image">
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
			Got something you need help with?
		</h3>
		<div class="accordion" id="accordionPanelsStayOpenExample">
                     <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                   <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
						Our Heritage and Expertise
                                   </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                   <div class="accordion-body">
						<p style="text-align: justify;">
							Highlight the rich heritage and expertise of Vaishnodevi Brass Industries in the world of brass craftsmanship. Describe your company's history, emphasizing the generations of experience and knowledge that have shaped your journey. Mention any significant milestones or achievements that demonstrate your expertise in working with brass.
						</p>
                                   </div>
                            </div>
                     </div>
                     <div class="accordion-item accord2">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
									Craftsmanship and Innovation
                                   </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                   <div class="accordion-body">
						<p style="text-align: justify;">
							Showcase your commitment to craftsmanship and innovation. Explain how your skilled artisans blend tradition with modern techniques to create exquisite brass products. Discuss any innovative approaches or technology you employ to push the boundaries of brass craftsmanship. Provide examples of unique or signature creations that exemplify your dedication to artistry and innovation.
						</p>	
                                   </div>
                            </div>
                     </div>
                     <div class="accordion-item accord2">
                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
						Global Impact and Partnerships
                                   </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                   <div class="accordion-body">
						<p style="text-align: justify;">
							Share insights into your global presence and partnerships. Discuss your reach in international markets and collaborations with other industry leaders. Mention any significant projects or partnerships that have had a positive impact on the industry or local communities. 
						</p>
                                   </div>
                            </div>
                     </div>
              </div>
	</div>
	<?php include 'includes/php/header_and_footer/footer.php'?>
</body>
</html>