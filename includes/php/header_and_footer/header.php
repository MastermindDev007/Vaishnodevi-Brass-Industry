<?php include 'admin/includes/php/dbcon.php'; ?>
<?php include 'admin/includes/php/dbcon2.php'; ?>
<header>
       <div class="container1">
              <p class="p1">
                     <i class="fa-solid fa-phone" style="color: #ffffff;"></i>
                     <?php
                            $cn = mysqli_connect("localhost", "root", "") or die ("Not connected");
                            $db = mysqli_select_db($cn, "vaishnodevi_contact") or die ("Not connected");
                            $st1 = "SELECT * FROM `mob` WHERE id = 1";
                            $res1 = mysqli_query($cn, $st1) or die("Not Inserted");
                            while ($fld1 = mysqli_fetch_array($res1)) {

				       if ($fld1['status'] == "1") {
                     ?>
			<b class="b1">
                            +91 <?php echo $fld1['number'];?>
                            </b>
			<?php
				       }
				       else {
				              echo " ";
				       }
                            }
                     ?>
              </p>
              <p class="p2">
                     <i class="fa-solid fa-envelope" style="color: #ffffff;"></i>
                     <?php
                            $cn = mysqli_connect("localhost", "root", "") or die ("Not connected");
                            $db = mysqli_select_db($cn, "vaishnodevi_contact") or die ("Not connected");
                            $st2 = "SELECT * FROM `email`";
                            $res2 = mysqli_query($cn, $st2) or die("Not Inserted");
                            while ($fld2 = mysqli_fetch_array($res2)) {
                                   if ($fld2['status'] == "1") {
                     ?>
                            <b class="b1">
                                   <?php echo $fld2['email']; ?>
                            </b>
			<?php
                                   }
					else {
						echo " ";
					}
				}
			?>
              </p>
              <p class="p3">
                     <?php
                     $cn = mysqli_connect("localhost", "root", "") or die ("Not connected");
                     $db = mysqli_select_db($cn, "vaishnodevi") or die ("Not connected");
                     $st = "SELECT * FROM `brochure` WHERE 1";
                     $res = mysqli_query($cn, $st) or die("Not Inserted");
                     while ($fld = mysqli_fetch_array($res)) {
                     ?>
                     <a href="admin/assets/header/uploads/<?php echo $fld['brochure']; ?>" target="open in new page">
                            <span>Brochure</span>
                     </a>
                     <?php
                     }
                     ?>
              </p>
       </div>
       <div class="container2">
              <?php
                     $cn = mysqli_connect("localhost", "root", "") or die ("Not connected");
                     $db = mysqli_select_db($cn, "vaishnodevi_pages") or die ("Not connected");
                     $st = "SELECT * FROM `header_logo` WHERE 1";
                     $res = mysqli_query($cn, $st) or die("Not Inserted");
                     while ($fld = mysqli_fetch_array($res)) {
              ?>
                     <img src="admin/assets/logo/<?php echo $fld['header_logo']; ?>" alt="" class="header_logo tp-header-sticky">
              <?php
                     }
              ?>
              <div class="navbar">
                     <a href="index.php" class="menubar home">Home</a>
                     <a href="about.php" class="menubar about">About</a>
                     <div class="dropdown">
                            <a href="product.php" class="dropbtn">Products <i class="fa-solid fa-angle-down" style="color: #000000; font-size: 10px;"></i></a>
                            <div class="dropdown-content">
                                   <a href="Brass_Plumbing_Parts.php">Brass Plumbing Parts</a>
                                   <a href="Brass_Bush.php">Brass Bush</a>
                                   <a href="Brass_Fastners.php">Brass Fastners</a>
                                   <a href="Brass_Inserts.php">Brass Inserts</a>
                                   <a href="Electrical_Fitting.php">Electrical Fitting</a>
                                   <a href="Brass_Anchor.php">Brass Anchor</a>
                                   <a href="Brass_flare_nut.php">Brass flare nut</a>
                                   <a href="Brass_Hose_Brab.php">Brass Hose Brab</a>
                            </div>
                          </div>
                     <a href="quality.php" class="menubar quality">Quality</a>
                     <a href="inquiry.php" class="menubar inquiry">Inquiry</a>
                     <a href="contact.php" class="menubar contact"><span>Contact Us</span></a>

                     <div class="sidenavbar">
                            <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i class="fa-solid fa-bars-staggered fa-flip-vertical dashes" style="color: #000000;"></i></button>

                            <div class="offcanvas offcanvas-end w-50" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                                   <div class="offcanvas-body">
                                          <img src="admin/assets/logo/header_logo.jpg" class="sidenav_image">
                                          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          <div class="list_in_sidemenu">
                                                        <ul>
                                                               <li>
                                                                      <a href="index.php">Home</a>
                                                               </li>
                                                               <li>
                                                                      <a href="about.php">About</a>
                                                               </li>
                                                               <li>
                                                                      <a href="product.php">Product</a>
                                                               </li>
                                                               <li>
                                                                      <a href="quality.php">Quality</a>
                                                               </li>
                                                               <li>
                                                                      <a href="inquiry.php">Inquiry</a>
                                                               </li>
                                                               <li>
                                                                      <a href="contact.php">Contact Us</a>
                                                               </li>
                                                        </ul>
                                          </div>
                                          <br>
                                          <br>
                                          <br>
                                          <div class="contact_details_in_sidebar">
                                                 <p class="heading_in_sidebar">
                                                        Contacts
                                                 </p>
                                                 <div class="adderess">
                                                        <i class="fa-solid fa-location-dot" style="color: #6ec1e4;"></i>
                                                        Jamnagar, Gujarat(INDIA)
                                                 </div>
                                                 <div class="gmail">
                                                        <i class="fa-solid fa-envelope" style="color: #6ec1e4;"></i>
                                                        Contact Us
                                                 </div>
                                                 <div class="mob">
                                                        <i class="fa-solid fa-phone" style="color: #6ec1e4;"></i>
                                                        <?php
                                                               $cn = mysqli_connect("localhost", "root", "") or die ("Not connected");
                                                               $db = mysqli_select_db($cn, "vaishnodevi_contact") or die ("Not connected");
                                                               $st1 = "SELECT * FROM `mob` WHERE id = 1";
                                                               $res1 = mysqli_query($cn, $st1) or die("Not Inserted");
                                                               while ($fld1 = mysqli_fetch_array($res1)) {
                                                               
			                                   	       if ($fld1['status'] == "1") {
                                                        ?>
                                                               <?php echo $fld1['number'];?>
			                                   <?php
			                                   	       }
			                                   	       else {
			                                   	              echo " ";
			                                   	       }
                                                               }
                                                        ?>
                                                 </div>
                                                 <br> <br>
                                                 <div class="sidenav_facebook">
                                                        <div class="sidenav_square face"></div>
                                                        <i class="fa-brands fa-facebook" style="font-size: 30px;"></i>
                                                 </div>
                                                 <div class="sidenav_twitter"> 
                                                        <div class="sidenav_square twit"></div>
                                                        <i class="fa-brands fa-twitter" style="font-size: 30px;"></i>
                                                 </div>
                                                 <div class="sidenav_youtube"> 
                                                        <div class="sidenav_square tube"></div>
                                                        <i class="fa-brands fa-youtube" style="font-size: 30px;"></i>
                                                 </div>
                                                 <div class="sidenav_linkedin">
                                                        <div class="sidenav_square linked"></div>
                                                        <i class="fa-brands fa-linkedin-in" style="font-size: 30px;"></i>
                                                 </div>
                                          </div>
                                   </div>
                            </div>
                     </div>

              </div>
              <div class="navbar2">
                     <div class="circle">
                            <i class="fa-solid fa-phone phone2" style="color: #ffffff;"></i>
                     </div>
                     <p class="p4">
                            Contact Us 
                            <br>
                            <?php
                                   $cn = mysqli_connect("localhost", "root", "") or die ("Not connected");
                                   $db = mysqli_select_db($cn, "vaishnodevi_contact") or die ("Not connected");
                                   $st1 = "SELECT * FROM `mob` WHERE id = 1";
                                   $res1 = mysqli_query($cn, $st1) or die("Not Inserted");
                                   while ($fld1 = mysqli_fetch_array($res1)) {

			       	       if ($fld1['status'] == "1") {
                            ?>
                            <span class="span3">
                                   <a href="tel: 7779092005" > +91 <?php echo $fld1['number'];?></a>
                            </span>
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
</header>