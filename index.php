<?php include 'admin/includes/php/dbcon.php'; ?>
<?php include 'admin/includes/php/dbcon2.php'; ?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <?php
              $cn = mysqli_connect("localhost", "root", "") or die ("Not connected");
              $db = mysqli_select_db($cn, "vaishnodevi") or die ("Not connected");
              $st1 = "SELECT * FROM `home_page` WHERE 1";
              $res1 = mysqli_query($cn, $st1) or die("Not Inserted");
              while ($fld1 = mysqli_fetch_array($res1)) {
       ?>
              <meta name="description" content="<?php echo $fld1['home_description'];?>">
              <meta name="keywords" content="<?php echo $fld1['home_keyword'];?>">
              <meta name="author" content="<?php echo $fld1['home_author'];?>">
              <title><?php echo $fld1['home_title'];?></title>
       <?php
              }
       ?>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
       <link rel="stylesheet" href="includes/css/index.css">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <link rel="stylesheet" href="includes/css/footer.css">
       <link rel="stylesheet" href="includes/css/header.css">
</head>
<body>
       <?php include 'includes/php/header_and_footer/header.php'?>
       <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                     
              <?php
                     $cn = mysqli_connect("localhost", "root", "") or die ("Not connected");
                     $db = mysqli_select_db($cn, "vaishnodevi_pages") or die ("Not connected");
                     $st2 = "SELECT * FROM `slider` WHERE 1";
                     $res2 = mysqli_query($cn, $st2) or die("Not Inserted");
                     while ($fld2 = mysqli_fetch_array($res2)) {
              ?>
                     <div class="carousel-item active">
                            <img src="<?php echo "admin/" . $fld2['image']; ?>" class="d-block w-100" alt="<?php echo $fld2['name']?>">
                     </div>
              <?php 
                     }
              ?>

                     <!-- <div class="carousel-item">
                            <img src="assets/home_image/slider2.jpg" class="d-block w-100" alt="...">
                     </div>
                     <div class="carousel-item">
                            <img src="assets/home_image/slider3.jpg" class="d-block w-100" alt="...">
                     </div> -->
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Next</span>
              </button>
       </div>
       <div class="feature_bg"></div>
       <div class="feature">
              <div class="feature1">
                     <p class="tp-features-point">
                            <span>01</span>
                     </p>
                     <p class="p5">
                            Rich Legacy in Brass <br> Expertise
                     </p>
                     <p class="p6">
                            With a history deeply rooted in the brass industry, our company brings a wealth of knowledge and experience to the table.
                     </p>
              </div>
              <div class="feature2">
                     <p class="tp-features-point second">
                            <span>02</span>
                     </p>
                     <p class="p5">
                            Precision and <br> Craftsmanship at the <br> Core
                     </p>
                     <p class="p6">
                            At the heart of our brass industry is a dedication to precision and craftsmanship.
                     </p>
              </div>
              <div class="feature3">
                     <p class="tp-features-point third">
                            <span>03</span>
                     </p>
                     <p class="p5">
                            Advanced Technology <br> Meets Tradition
                     </p>
                     <p class="p6">
                            Our state-of-the-art facilities and metallurgical expertise ensure that we remain at the forefront of the industry.
                     </p>
              </div>
              <div class="feature4">
                     <p class="tp-features-point fourth">
                            <span>04</span>
                     </p>
                     <p class="p5">
                            Customer-Centric <br> Philosophy
                     </p>
                     <p class="p6">
                            We understand their unique needs and work closely with them to provide tailored brass solutions that exceed their expectations.
                     </p>
              </div>
              <img src="assets/home_image/experience1.jpg" class="exp1">
              <div class="tp-about-counter">
                     <div class="tp-about-counter-inner d-flex align-item-center">
                            <div class="tp-about-counter-content">
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
                            Discovering the Soul of our Brass Industry
                     </h3>
                     <p class="desc1" style="text-align: justify;">
                            In the realm of brass, our journey is a testament to unwavering
                            dedication and a passion for excellence. From humble beginnings to our current standing as
                            industry leaders, we've continually pushed the boundaries of craftsmanship. 
                     </p>
                     <p class="desc2" style="text-align: justify;">
                            Every piece of brass that leaves our facilities bears the hallmark
                            of our dedication to precision, quality, and innovation. Our journey is not just about brass;
                            it's about the people, the artistry, and the relentless pursuit of perfection.
                     </p>
                     <p class="desc3" style="text-align: justify;">
                            At the heart of our story are the artisans who breathe life into
                            brass, blending tradition with modernity. We invite you to delve deeper into our history, our
                            values, and our commitment to crafting brass excellence. 
                     </p>
              </div>
              <div class="brass_golden_blend">
              <?php
                            $cn = mysqli_connect("localhost", "root", "") or die("Not connected");
                            $db = mysqli_select_db($cn, "vaishnodevi_pages") or die("Not connected");
                            $st3 = "SELECT * FROM `others` WHERE 1";
                            $res3 = mysqli_query($cn, $st3) or die("Not Inserted");
                            while ($fld3 = mysqli_fetch_array($res3)) {
                     ?>
                     <span class="section-title-pre">
                            <?php echo $fld3['comp_name']?>
                     </span>
                     <?php 
                            }
                     ?>
                     <h3 class="section-title">
                            Brass: The Golden Blend
                     </h3>
                     <div class="blend gb1">
                            <div class="tp-service-square sq1">
                                   <img src="assets/home_image/pc_icon.png" class="icon_in_square">
                            </div>
                            <div class="tp-service-title">
                                   Alloyed
                            </div>
                            <p style="text-align: justify;">
                                   Brass is an alloy of copper and zinc.Brass is an alloy created by
                                   blending copper and zinc in varying proportions. 
                            </p>
                     </div>
                     <div class="blend gb2">
                            <div class="tp-service-square sq2">
                                   <img src="assets/home_image/machine_repair.png" class="icon_in_square">
                            </div>
                            <div class="tp-service-title">
                                   Malleable
                            </div>
                            <p style="text-align: justify;">
                                   It is highly malleable, allowing for easy shaping.One of the
                                   outstanding features of brass is its exceptional malleability.
                            </p>
                     </div>
                     <div class="blend gb3">
                            <div class="tp-service-square sq3">
                                   <img src="assets/home_image/open_laptop.png" class="icon_in_square">
                            </div>
                            <div class="tp-service-title">
                                   Corrosion-Resistant
                            </div>
                            <p style="text-align: justify;">
                                   Brass exhibits resistance to corrosion.One of the remarkable
                                   qualities of brass is its inherent resistance to corrosion. 
                            </p>
                     </div>
              </div>
              <div class="excellence_customer_satisfaction">
              <?php
                            $cn = mysqli_connect("localhost", "root", "") or die("Not connected");
                            $db = mysqli_select_db($cn, "vaishnodevi_pages") or die("Not connected");
                            $st3 = "SELECT * FROM `others` WHERE 1";
                            $res3 = mysqli_query($cn, $st3) or die("Not Inserted");
                            while ($fld3 = mysqli_fetch_array($res3)) {
                     ?>
                     <span class="tp-title-pre">
                            <?php echo $fld3['comp_name']?>
                     </span>
                     <?php 
                            }
                     ?>
                     <h3 class="tp-title">
                            Delivering Excellence and Customer Satisfaction
                     </h3>
                     <div class="ecs1">
                            <img src="assets/home_image/ecs1.jpg" class="ECS">
                            <div class="DE_and_SC-title title1">
                                   Unmatched Quality
                            </div>
                            <div class="DE_and_SC-description" style="text-align: justify;">
                                   We prioritize the highest standards of quality in every product we deliver, ensuring reliability and durability.
                            </div>
                     </div>
                     <div class="ecs2">
                            <img src="assets/home_image/ecs2.jpg" class="ECS">
                            <div class="DE_and_SC-title title2">
                                   Tailored Solutions
                            </div>
                            <div class="DE_and_SC-description" style="text-align: justify;">
                                   Our products and services are customized to meet our customers' specific needs, providing solutions.
                            </div>
                     </div>
                     <div class="ecs3">
                            <img src="assets/home_image/ecs3.jpg" class="ECS">
                            <div class="DE_and_SC-title title3">
                                   Cutting-edge Technology
                            </div>
                            <div class="DE_and_SC-description" style="text-align: justify;">
                                   We leverage state-of-the-art technology and machinery to deliver superior products with precision and efficiency.
                            </div>
                     </div>
                     <div class="ecs4">
                            <img src="assets/home_image/ecs4.jpg" class="ECS">
                            <div class="DE_and_SC-title title4">
                                   Customer-Centric Approach
                            </div>
                            <div class="DE_and_SC-description" style="text-align: justify;">
                                   Our focus is on exceeding customer expectations, delivering products and services that ensure their satisfaction.
                            </div>
                     </div>
              </div>
              <div class="faq_QA">
                     <img src="assets/home_image/faq-img.jpg" class="tp-faq-bg-img">
                     <?php
                            $cn = mysqli_connect("localhost", "root", "") or die("Not connected");
                            $db = mysqli_select_db($cn, "vaishnodevi_pages") or die("Not connected");
                            $st3 = "SELECT * FROM `others` WHERE 1";
                            $res3 = mysqli_query($cn, $st3) or die("Not Inserted");
                            while ($fld3 = mysqli_fetch_array($res3)) {
                     ?>
                     <span class="tp-faq-title-pre">
                            <?php echo $fld3['comp_name']?>
                     </span>
                     <?php 
                            }
                     ?>
                     <div class="tp-faq-title">
                            Brass FAQs: Your Questions, Our Answers
                     </div>
                     <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                   <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                                 What is brass, and how is it different from other metals?
                                          </button>
                                   </h2>
                                   <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                          <div class="accordion-body">
                                                 Brass is an alloy made primarily of copper and zinc, though it can also contain other elements in varying proportions. It stands out from other metals due to its distinct golden appearance and unique combination of properties, including corrosion resistance, malleability, and electrical conductivity.
                                          </div>
                                   </div>
                            </div>
                            <div class="accordion-item accord2">
                                   <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                                 Is brass eco-friendly and recyclable?
                                          </button>
                                   </h2>
                                   <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                          <div class="accordion-body">
                                                 Yes, brass is considered an eco-friendly material. It is highly recyclable, and recycling brass consumes significantly less energy compared to producing it from raw materials. Recycling brass reduces the need for mining and the associated environmental impact, making it a sustainable choice.
                                          </div>
                                   </div>
                            </div>
                            <div class="accordion-item accord2">
                                   <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                                 What are some common applications of brass?
                                          </button>
                                   </h2>
                                   <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                          <div class="accordion-body">
                                                 Brass is used in a wide range of applications. Common uses include plumbing fittings, electrical connectors, musical instruments (such as trumpets and saxophones), decorative items, hardware, and precision components in machinery. Its versatility and unique properties make it suitable for both practical and artistic purposes.
                                          </div>
                                   </div>
                            </div>
                     </div>
              </div>
              <div class="latest_product">
                     <div class="survey">
                            <div class="survey_square survey1">
                                   <img src="assets/home_image/circuit.png" class="survey_image">
                                   <p class="survey_title">Our Products <br> <span>500+</span></p>
                            </div>
                            <div class="survey_square survey2">
                                   <img src="assets/home_image/brain.png" class="survey_image">
                                   <div class="survey_title">Team Member <br> <span>45+</span></div>
                            </div>
                            <div class="survey_square survey3">
                                   <img src="assets/home_image/instagram.png" class="survey_image">
                                   <div class="survey_title">Satisfied Client <br> <span>500+</span></div>
                            </div>
                            <div class="survey_square survey4">
                                   <img src="assets/home_image/feedback.png" class="survey_image">
                                   <div class="survey_title">Year of Experience <span>15+</span></div>
                            </div>
                     </div>
                     <?php
                            $cn = mysqli_connect("localhost", "root", "") or die("Not connected");
                            $db = mysqli_select_db($cn, "vaishnodevi_pages") or die("Not connected");
                            $st3 = "SELECT * FROM `others` WHERE 1";
                            $res3 = mysqli_query($cn, $st3) or die("Not Inserted");
                            while ($fld3 = mysqli_fetch_array($res3)) {
                     ?>
                     <span class="tp-product-title-pre">
                            <?php echo $fld3['comp_name']?>
                     </span>
                     <?php 
                            }
                     ?>
                     <div class="tp-product-title">
                            Latest Products
                     </div>
                     <div class="scroll-container">
                            <a href="#"><img src="assets/home_image/product_slider1.webp" alt="Cinque Terre" class="scroll_container_img"></a>
                            <a href="#"><img src="assets/home_image/product_slider2.webp" alt="Forest" class="scroll_container_img"></a>
                            <a href="#"><img src="assets/home_image/product_slider3.webp" alt="Northern Lights" class="scroll_container_img"></a>
                            <a href="#"><img src="assets/home_image/product_slider4.webp" alt="Mountains" class="scroll_container_img"></a>
                            <a href="#"><img src="assets/home_image/product_slider5.webp" alt="Mountains" class="scroll_container_img"></a>
                            <a href="#"><img src="assets/home_image/product_slider6.webp" alt="Mountains" class="scroll_container_img"></a>
                            <a href="#"><img src="assets/home_image/product_slider7.webp" alt="Mountains" class="scroll_container_img"></a>
                            <a href="#"><img src="assets/home_image/product_slider8.webp" alt="Mountains" class="scroll_container_img"></a>
                            <a href="#"><img src="assets/home_image/product_slider9.webp" alt="Mountains" class="scroll_container_img"></a>
                            <a href="#"><img src="assets/home_image/product_slider10.webp" alt="Mountains"class="scroll_container_img"></a>
                     </div>
              </div> 
       </div>
       <div class="container5"></div>
       <?php include 'includes/php/header_and_footer/footer.php'?>
</body>
</html>