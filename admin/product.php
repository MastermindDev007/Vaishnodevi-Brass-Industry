<?php include 'includes/php/dbcon.php';?>
<?php
if (isset($_POST['add_category'])) {
    $product_name = $_POST['product_name'];
    $category_name = $_POST['category_name'];
    $sub_category_name = $_POST['price'];
    $description = $_POST['description'];

    $filename = $_FILES["category_image"]["name"];
    $tmpname = $_FILES["category_image"]["tmp_name"];
    $folder = "assets/category/uploads1/" . $filename;

    $target_dir = "assets/category/uploads1/";

    // Check if the file was uploaded without errors
    if ($_FILES["category_image"]["error"] == UPLOAD_ERR_OK) {
        $target_file = $target_dir . basename($_FILES["category_image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        
        // Check if the file is an image
        $check = getimagesize($tmpname);
        if ($check === false) {
            echo "File is not an image.";
            exit;
        }
        
        // Check file extension
        if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
            echo "Sorry, only JPG, JPEG, PNG files are allowed.";
            exit;
        }

        // Move uploaded file to destination directory
        if (!move_uploaded_file($tmpname, $target_file)) {
            echo "Sorry, there was an error uploading your file.";
            exit;
        }

        // Insert into database
        $imagePath = $target_file; // Store the path to the uploaded image
        $st = "INSERT INTO `product`(`product_name`, `category_name`, `price`, `product_image`, `description`) VALUES ('$product_name', '$category_name', '$sub_category_name', '$imagePath', '$description')";
        $res = mysqli_query($cn, $st) or die("Not Inserted");

        // Redirect to a page where the user can view the uploaded image
        header("location: http://localhost/vaishnodevi/admin/product.php");
        exit; // Ensure that no further code is executed after the redirection
    } else {
        echo "File upload error.";
    }
}

mysqli_close($cn);
?>



<?php include 'includes/php/dbcon.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product || Vaishnodevi Brass Industries</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
	<link rel="stylesheet" href="includes/css/footer.css">
	<link rel="stylesheet" href="includes/css/category.css">
	<link rel="stylesheet" href="includes/css/header.css">
</head>
<body>
	<?php include 'includes/php/header.php'?>
	<div class="category_content">
		<div class="tp-title-category">
			Products
		</div>
		<div class="button_content">
			<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="btn_cat">Add Product</button>
			<div id="id01" class="modal">
				<form class="modal-content animate" action="#" method="post" enctype="multipart/form-data">
					<div class="imgcontainer">
						<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
					</div>
					<div class="category">
						<p class="p5">PRODUCTS</p>
						<p class="p6">Add Products</p>
							<label for="Product Name" class="first">Product Name:</label>
							<input type="text" name="product_name" id="Product_Name" placeholder="Enter Category Name Here" class="i1" required>
						
							<label for="Category Name" class="second">Category Name:</label>
							<select name="category_name" id="category_name" class="i2">
								<option value="Select Category">Select Category</option>
								<?php
									$st = "SELECT `id`, `category_name` FROM `category` WHERE `sub_category` = 'Yes'";
									$res = mysqli_query($cn, $st) or die("Not Inserted");
									while ($fld=mysqli_fetch_array($res)) {
								?>
									<option value="<?php echo $fld['id']?>"><?php echo $fld['category_name']?></option>
								<?php
									}
								?>
							</select>
							
							<label for="Sub-Category Name" class="second">Sub-Category Name:</label>
							<input type="number" name="price" id="price" placeholder="Enter price Name Here" class="i2" required>
						
							<label for="Category Image" class="third">Category Image:</label>
							<input type="file" name="category_image" id="category_image" class="i3" required>
						
							<label for="Description" class="fourth">Description:</label>
							<textarea name="description" cols="143" rows="4" class="text1"></textarea>
						
							<input type="submit" class="submit" name="add_category" value="ADD">
					</div>
					<div class="container" style="background-color:#f1f1f1">
						<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
					</div>
				</form>
			</div>
		</div>
		<div class="admin_table">
			<table class="table table-hover table-borderd table-striped shadow-lg">
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Product_Name</th>
						<th scope="col">Category_Name</th>
						<th scope="col">Price</th>
						<th scope="col">Product_Image</th>
						<th scope="col">Description</th>
						<th scope="col">Update</th>
						<th scope="col">Delete</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$st = "SELECT * FROM `product` WHERE 1";
						$res = mysqli_query($cn, $st) or die("Not Inserted");
						while ($fld=mysqli_fetch_array($res)) {
					?>
						<tr>
							<td><p style="text-align: center;"><?php echo $fld['id']?></p></td>
							<td><?php echo $fld['product_name']?></td>
							<td>
								<?php
									$a = $fld["category_name"];
									$st2 = "SELECT * FROM `category` WHERE id='$a'";
									$res2 = mysqli_query($cn, $st2) or die("Not Inserted");
									while ($cat=mysqli_fetch_array($res2)) {
										echo $cat['category_name'];
									}
								?>
							</td>
							<td><?php echo $fld['price']?></td>
							<td>
								<img src="<?php echo $fld['product_image']?>" width="150px" alt="Uploaded Image">
							</td>
							<td><?php echo $fld['description']?></td>
							<td><a href="update_product.php?id=<?php echo $fld['id']?>" class="btn btn-success">Update</a></td>
							<td><a href="delete_product.php?id=<?php echo $fld['id']?>" class="btn btn-danger">Delete</a></td>
						</tr>
					<?php
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
	<?php include 'includes/php/footer.php'?>
	<script src="includes/js/script.js"></script>
	<script src="includes/js/script2.js"></script>
	<script src="includes/js/script3.js"></script>
	<script src="includes/js/script4.js"></script>
	<script src="includes/js/script5.js"></script>
	<script src="includes/js/script6.js"></script>
</body>
</html>