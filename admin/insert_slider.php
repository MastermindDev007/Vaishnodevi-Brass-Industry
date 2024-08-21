<?php include 'includes/php/dbcon2.php';?>
<?php
if (isset($_POST['add_slider'])) {
    $slider_name = $_POST['slider_name'];

    $filename = $_FILES["slider_image"]["name"];
    $tmpname = $_FILES["slider_image"]["tmp_name"];
    $folder = "assets/slider/uploads/".$filename;

    // Check if the file was uploaded without errors
    if ($_FILES["slider_image"]["error"] == UPLOAD_ERR_OK) {
        // Ensure the file is an image
        $check = getimagesize($_FILES["slider_image"]["tmp_name"]);
        if ($check === false) {
            echo "File is not an image.";
            exit;
        }
        
        // Validate file extension
        $imageFileType = strtolower(pathinfo($folder, PATHINFO_EXTENSION));
        if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
            echo "Sorry, only JPG, JPEG, PNG files are allowed.";
            exit;
        }

        // Move the uploaded file to the desired folder
        if (move_uploaded_file($tmpname, $folder)) {
            // Insert into database
            $st = "INSERT INTO `slider`(`name`, `image`) VALUES ('$slider_name', '$folder')";
            $res = mysqli_query($cn, $st);

            if ($res) {
                // Redirect to a page where the user can view the uploaded image
                header("Location: http://localhost/vaishnodevi/admin/slider.php");
                exit; // Ensure that no further code is executed after the redirection
            } else {
                echo "Database insertion failed.";
            }
        } else {
            echo "Failed to move uploaded file.";
        }
    } else {
        echo "File upload error.";
    }
}

mysqli_close($cn);
?>
