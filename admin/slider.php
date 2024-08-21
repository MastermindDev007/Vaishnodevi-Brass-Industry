<?php include 'includes/php/dbcon2.php';?>
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
	<link rel="stylesheet" href="includes/css/slider.css">
	<link rel="stylesheet" href="includes/css/header.css">
</head>
<body>
	<?php include 'includes/php/header.php'?>
     <div class="slider_content">
          <div class="tp-title-slider">
               Slider
          </div>
          <div class="button_content">
			<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="btn_cat">Add Slider Image</button>
			<div id="id01" class="modal">
				<form class="modal-content animate" action="insert_slider.php" method="post" enctype="multipart/form-data">
					<div class="imgcontainer">
						<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
					</div>
					<div class="slider">
						<p class="p5">SLIDER</p>
						<p class="p6">Add Slider</p>
							<label for="Slider Image Name" class="first">Slider Image Name:</label>
							<input type="text" name="slider_name" id="slider_Name" placeholder="Enter Category Name Here" class="i1" required>
						
							<label for="Slider Image" class="second">Slider Image:</label>
							<input type="file" name="slider_image" id="slider_image" class="i2" required>

							<input type="submit" class="submit" name="add_slider" value="ADD">
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
						<th scope="col">Name</th>
						<th scope="col">Image</th>
						<th scope="col">Update</th>
						<th scope="col">Delete</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$st = "SELECT * FROM `slider` WHERE 1";
						$res = mysqli_query($cn, $st) or die("Not Inserted");
						while ($fld=mysqli_fetch_array($res)) {
					?>
						<tr>
							<td><p style="text-align: center;"><?php echo $fld['id']?></p></td>
							<td><?php echo $fld['name']?></td>
							<td>
								<img src="<?php echo $fld['image']?>" width="150px" alt="Uploaded Image">
							</td>
							<td><a href="update_slider.php?id=<?php echo $fld['id']?>" class="btn btn-success">Update</a></td>
							<td><a href="delete_slider.php?id=<?php echo $fld['id']?>" class="btn btn-danger">Delete</a></td>
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