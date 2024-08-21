<?php include 'includes/php/dbcon2.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logo || Vaishnodevi Brass Industries</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="includes/css/footer.css">
    <link rel="stylesheet" href="includes/css/logo.css">
    <link rel="stylesheet" href="includes/css/header.css">
</head>

<body>
    <?php include 'includes/php/header.php'; ?>
    <div class="container2">
        <div class="logo header_logo">
            <p class="p5">HEADER LOGO</p>
            <p class="p6">Update Header Logo</p>
            <?php
                $st = "SELECT * FROM `header_logo` WHERE 1";
                $res = mysqli_query($cn, $st) or die("Not Inserted");
                while ($fld = mysqli_fetch_array($res)) {
            ?>
            <img src="assets/logo/uploads/<?php echo $fld['header_logo']; ?>" alt="Uploaded Image" width="150px" class="uploaded_image">
            <form action="insert/update_header_logo.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="stud_id" value="<?php echo $fld["id"];?>">
                <input type="file" name="new_logo" id="logo" class="i1">
                <input type="hidden" name="old_logo" value="<?php echo $fld["header_logo"];?>" class="i1">
                <input type="submit" class="submit" name="add_header_logo" value="UPDATE">
            </form>
            <?php
                }
            ?>  
        </div>
        <div class="logo footer_logo">
            <p class="p5">FOOTER LOGO</p>
            <p class="p6">Update Footer Logo</p>
            <?php
                $st1 = "SELECT * FROM `footer_logo` WHERE 1";
                $res1 = mysqli_query($cn, $st1) or die("Not Inserted");
                while ($fld1 = mysqli_fetch_array($res1)) {
            ?>
            <img src="<?php echo "assets/logo/uploads1/" . $fld1['footer_logo']; ?>" alt="Uploaded Image" width="150px" class="uploaded_image">
            <form action="insert/update_footer_logo.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="stud_id1" value="<?php echo $fld1["id"];?>">
                <input type="file" name="new_logo1" id="logo" class="i1">
                <input type="hidden" name="old_logo1" value="<?php echo $fld1["footer_logo"];?>" class="i1">
                <input type="submit" class="submit" name="add_footer_logo" value="UPDATE">
            </form>
            <?php
                }
            ?>   
        </div>
        <div class="logo favicon">
            <p class="p5">FAVICON LOGO</p>
            <p class="p6">Update Favicon Logo</p>
            <?php
                $st2 = "SELECT * FROM `favicon` WHERE 1";
                $res2 = mysqli_query($cn, $st2) or die("Not Inserted");
                while ($fld2 = mysqli_fetch_array($res2)) {
            ?>
            <img src="<?php echo "assets/logo/uploads2/" . $fld2['favicon']; ?>" alt="Uploaded Image" width="150px" class="uploaded_image">
            <form action="insert/update_favicon.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="stud_id2" value="<?php echo $fld2["id"];?>">
                <input type="file" name="new_logo2" id="logo" class="i1">
                <input type="hidden" name="old_logo2" value="<?php echo $fld2["favicon"];?>" class="i1">
                <input type="submit" class="submit" name="add_favicon" value="UPDATE">
            </form>
            <?php
                }
            ?> 
        </div>
    </div>
    <?php include 'includes/php/footer.php'; ?>
    <script src="includes/js/script.js"></script>
    <script src="includes/js/script2.js"></script>
    <script src="includes/js/script3.js"></script>
    <script src="includes/js/script4.js"></script>
    <script src="includes/js/script5.js"></script>
    <script src="includes/js/script6.js"></script>
</body>

</html>
