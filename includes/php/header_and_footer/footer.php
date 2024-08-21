<?php include 'admin/includes/php/dbcon.php'; ?>
<?php include 'admin/includes/php/dbcon2.php'; ?>
<footer>
       <div class="container3">
              <div class="section1">
                     <?php
                            $st1 = "SELECT * FROM `footer_logo` WHERE 1";
                            $res1 = mysqli_query($cn, $st1) or die("Not Inserted");
                            while ($fld1 = mysqli_fetch_array($res1)) {
                     ?>
			<img src="<?php echo "admin/assets/logo/uploads1/" . $fld1['footer_logo']; ?>" alt="" class="footer_logo">
			<?php
                            }
                     ?>
                     <p class="tageline">
                            Vaishnodevi Brass Industries: Where Tradition Meets Innovation in Brass Craftsmanship.
                     </p>
                     <div class="tp-footer-widget-social">
                            <?php
                                   $cn = mysqli_connect("localhost", "root", "") or die ("Not connected");
                                   $db = mysqli_select_db($cn, "vaishnodevi") or die ("Not connected");
                                   $st1 = "SELECT * FROM `social_links` WHERE 1";
                                   $res1 = mysqli_query($cn, $st1) or die("Not Inserted");
                                   while ($fld1 = mysqli_fetch_array($res1)) {
                            ?>
                                   <a href="<?php echo $fld1['facebook']?>">
                                          <i class="fa-brands fa-facebook block1"></i>
                                   </a>
                                   <a href="<?php echo $fld1['twitter']?>">
                                          <i class="fa-brands fa-twitter block1"></i>
                                   </a>
                                   <a href="<?php echo $fld1['instagram']?>">
                                          <i class="fa-brands fa-instagram block1"></i>
                                   </a>
                                   <a href="<?php echo $fld1['linkedin']?>">
                                          <i class="fa-brands fa-linkedin block1"></i>
                                   </a>
                            <?php
                                   }
                            ?>
                     </div>
              </div>
              <div class="quick_links">
                     <p class="QuickLinks">Quick Links</p>
                     <ul class="links">
                            <li><a href="index.php" class="btn-shine">Home</a></li>
                            <li><a href="about.php" class="btn-shine">About</a></li>
                            <li><a href="product.php" class="btn-shine">Products</a></li>
                            <li><a href="quality.php" class="btn-shine">Quality</a></li>
                            <li><a href="inquiry.php" class="btn-shine">Inquiry</a></li>
                            <li><a href="contact.php" class="btn-shine">Contact Us</a></li>
                     </ul>
              </div>
              <div class="">
                     <p class="ProductCategory">Product Categories</p>
                     <ul class="category">
                            <li><a href="Brass_Plumbing_Parts.php" class="btn-shine">Brass Plumbing Parts</a></li>
                            <li><a href="Brass_Bush.php" class="btn-shine">Brass Bush</a></li>
                            <li><a href="Brass_Fastners.php" class="btn-shine">Brass Fastners</a></li>
                            <li><a href="Brass_Inserts.php" class="btn-shine">Brass Inserts</a></li>
                            <li><a href="Electrical_Fitting.php" class="btn-shine">Electrical Fitting</a></li>
                            <li><a href="Brass_Anchor.php" class="btn-shine">Brass Anchor</a></li>
                            <li><a href="Brass_flare_nut.php" class="btn-shine">Brass flare nut</a></li>
                            <li><a href="Brass_Hose_Brab.php" class="btn-shine">Brass Hose Brab</a></li>
                     </ul>
              </div>
		<div class="intouch">
                     <p class="InTouch">Get in Touch</p>
                     <div class="subsection1">
                            <p class="detail detail1">
                                   <i class="fa-solid fa-phone rounded-1"></i>
                                   <?php
                                          $cn = mysqli_connect("localhost", "root", "") or die ("Not connected");
                                          $db = mysqli_select_db($cn, "vaishnodevi_contact") or die ("Not connected");
                                          $st1 = "SELECT * FROM `mob` WHERE id = 1";
                                          $res1 = mysqli_query($cn, $st1) or die("Not Inserted");
                                          while ($fld1 = mysqli_fetch_array($res1)) {
                                   ?>
                                   <?php
						if ($fld1['status'] == "1") {
                                                 ?>
					<span class="span_detail">
                                          <?php echo $fld1['name']; ?>
                                          <br>
                                          <?php echo $fld1['number'];?>
                                   </span>
					<?php
						}
						else {
						echo " ";
						}
					?>
                                   <?php
                                          }
                                   ?>
                            </p>

                            <p class="detail detail2">
                                   <i class="fa-solid fa-phone rounded-1"></i>
                                   <?php
                                          $cn = mysqli_connect("localhost", "root", "") or die ("Not connected");
                                          $db = mysqli_select_db($cn, "vaishnodevi_contact") or die ("Not connected");
                                          $st1 = "SELECT * FROM `mob` WHERE id = 2";
                                          $res1 = mysqli_query($cn, $st1) or die("Not Inserted");
                                          while ($fld1 = mysqli_fetch_array($res1)) {
                                   ?>
                                   <?php
						if ($fld1['status'] == "1") {
                                                 ?>
					<span class="span_detail">
                                          <?php echo $fld1['name']; ?>
                                          <br>
                                          <?php echo $fld1['number'];?>
                                   </span>
					<?php
						}
						else {
						echo " ";
						}
					?>
                                   <?php
                                          }
                                   ?>
                            </p>

                            <p class="detail detail3">
                                   <i class="fa-solid fa-envelope rounded-1"></i>
                                   <?php
                                          $cn = mysqli_connect("localhost", "root", "") or die ("Not connected");
                                          $db = mysqli_select_db($cn, "vaishnodevi_contact") or die ("Not connected");
                                          $st2 = "SELECT * FROM `email`";
                                          $res2 = mysqli_query($cn, $st2) or die("Not Inserted");
                                          while ($fld2 = mysqli_fetch_array($res2)) {
							if ($fld2['status'] == "1") {
                                   ?>
                                                        <span class="span_detail"><?php echo $fld2['email']; ?></span>
					<?php
                                                 }
							else {
								echo " ";
							}
						}
					?>
                            </p>

                            <p class="detail detail4">
                                   <i class="fa-solid fa-paper-plane rounded-1"></i>
                                   <?php
				       	$cn = mysqli_connect("localhost", "root", "") or die ("Not connected");
				       	$db = mysqli_select_db($cn, "vaishnodevi_contact") or die ("Not connected");
				       	$st3 = "SELECT * FROM `address`";
				       	$res3 = mysqli_query($cn, $st3) or die("Not Inserted");
				       	while ($fld3 = mysqli_fetch_array($res3)) {
				       		if ($fld3['status'] == "1") {
                                   ?>
                                                        <span class="span_detail"><?php echo $fld3['address']; ?></span>
                                   <?php
                                                 }
				       		else {
				       			echo " ";
				       		}
				       	}
				       ?>
                            </p>
			</div>
              </div>
       </div>
       <div class="container4">
              <p class="SubFooter1">
                     All Rights Reserved &copy; 2023 
                     <?php
                            $cn = mysqli_connect("localhost", "root", "") or die("Not connected");
                            $db = mysqli_select_db($cn, "vaishnodevi_pages") or die("Not connected");
                            $st3 = "SELECT * FROM `others` WHERE 1";
                            $res3 = mysqli_query($cn, $st3) or die("Not Inserted");
                            while ($fld3 = mysqli_fetch_array($res3)) {
                     ?>
                     <span class="span1">
                            <?php echo $fld3['comp_name']?>
                     </span>
                     <?php 
                            }
                     ?>
              </p>
              <p class="SubFooter2">
                     || Developed by 
                     <?php
                            $cn = mysqli_connect("localhost", "root", "") or die ("Not connected");
                            $db = mysqli_select_db($cn, "vaishnodevi") or die ("Not connected");
                            $st1 = "SELECT * FROM `contact_us_page` WHERE 1";
                            $res1 = mysqli_query($cn, $st1) or die("Not Inserted");
                            while ($fld1 = mysqli_fetch_array($res1)) {
                     ?>
                     <span class="span2">
                            <?php echo $fld1['contact_us_author'];?>
                            </span>
                     <?php
                            }
                     ?>
              </p>
       </div>
</footer>


