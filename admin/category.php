<?php include 'includes/php/dbcon.php';?>
<?php
if (isset($_POST['add_category'])) {
	$category_name = $_POST['category_name'];
	$sub_category = $_POST['sub_category_name'];
	$description = $_POST['description'];
	$filename = $_FILES["category_image"]["name"];
	$tmpname = $_FILES["category_image"]["tmp_name"];
	$folder = "../assets/category/uploads1/".$filename;
	move_uploaded_file($tmpname, $folder);
	$target_dir = "assets/category/uploads1/";
	$uploads = $target_dir;

	// Check if the file was uploaded without errors
	if ($_FILES["category_image"]["error"] == UPLOAD_ERR_OK) {
		$target_file = $target_dir . basename($_FILES["category_image"]["name"]);
		$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

		// Check if the file is an image
		$check = getimagesize($_FILES["category_image"]["tmp_name"]);
		if ($check === false) {
			echo "File is not an image.";
			exit;
		}

		// Check file extension
		if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "webp" && $imageFileType != "svg" && $imageFileType != "avif" && $imageFileType != "apng" && $imageFileType != "gif") {
			echo "Sorry, only JPG, JPEG, PNG files are allowed.";
			exit;
		}

		// Move uploaded file to destination directory
		if (!move_uploaded_file($_FILES["category_image"]["tmp_name"], $target_file)) {
			echo "Sorry, there was an error uploading your file.";
			exit;
		}

		// Insert into database
		$imagePath = $target_file; // Store the path to the uploaded image
		$st = "INSERT INTO `category`(`category_name`, `sub_category`, `category_image`, `description`) VALUES ('$category_name', '$sub_category','$imagePath', '$description')";
		$res = mysqli_query($cn, $st) or die("Not Inserted");

		// Redirect to a page where the user can view the uploaded image
		header("location: http://localhost/vaishnodevi/admin/category.php");
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
	<title>Category || Vaishnodevi Brass Industries</title>
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
			Categories
		</div>
		<div class="button_content">
			<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="btn_cat">Add Category</button>
			<div id="id01" class="modal">
				<form class="modal-content animate" action="#" method="post" enctype="multipart/form-data">
					<div class="imgcontainer">
						<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
					</div>
					<div class="category">
						<p class="p5">CATEGORY</p>
						<p class="p6">Add Category</p>
							<label for="Category Name" class="first">Category Name:</label>
							<input type="text" name="category_name" id="Category_Name" placeholder="Enter Category Name Here" class="i1" required>
						
							<label for="Sub-Category Name" class="second">Sub-Category Name:</label>
							<select name="sub_category_name" id="Sub-Category_Name" class="i2">
								<option value="Select Sub-Category">Select Sub-Category</option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
						
							<label for="Category Image" class="third">Category Image:</label>
							<input type="file" name="category_image" id="category_image" class="i3" required>
						
							<label for="Description" class="fourth">Description:</label>
							<br>
							<textarea name="description" cols="143" rows="4" class="text1"></textarea>
						
							<input type="submit" class="submit" name="add_category" value="ADD">
					</div>
					<div class="container" style="background-color:#f1f1f1">
						<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
					</div>
				</form>
			</div>
		</div>
		<!-- <div class="category_table"> -->
			<table class="table table-hover table-borderd table-striped shadow-lg">
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Category Name</th>
						<th scope="col">Sub-Category</th>
						<th scope="col">Category Image</th>
						<th scope="col">Description</th>
						<th scope="col">Update</th>
						<th scope="col">Delete</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$st = "SELECT * FROM `category` WHERE 1";
						$res = mysqli_query($cn, $st) or die("Not Inserted");
						while ($fld=mysqli_fetch_array($res)) {
					?>
						<tr>
							<td><p style="text-align: center;"><?php echo $fld['id']?></p></td>
							<td><?php echo $fld['category_name']?></td>
							<td><?php echo $fld['sub_category']?></td>
							<td>
								<img src="<?php echo $fld['category_image']?>" width="150px" alt="Uploaded Image">
							</td>
							<td><?php echo $fld['description']?></td>
							<td><a href="update_category.php?id=<?php echo $fld['id']?>" class="btn btn-success">Update</a></td>
							<td><a href="delete_category.php?id=<?php echo $fld['id']?>" class="btn btn-danger">Delete</a></td>
						</tr>
					<?php
						}
					?>
				</tbody>
			</table>
		<!-- </div> -->
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