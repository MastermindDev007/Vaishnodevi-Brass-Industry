<?php 
session_start();
include '../includes/php/dbcon2.php';

if (isset($_POST['add_favicon'])) {
    $stud_id = $_POST['stud_id2'];
    $new_image = $_FILES['new_logo2']['name'];
    $old_image = $_POST['old_logo2'];
    $target_dir = "../assets/logo/uploads2/"; // Specify the directory where you want to save the uploaded files
    $target_file = $target_dir . basename($new_image);

    if ($new_image != '') {
        $update_filename = $new_image;
    } else {
        $update_filename = $old_image;
    }

    // Check if the new image already exists
    if (file_exists($target_file) && $new_image != $old_image) {
        $filename = $new_image;
        $_SESSION['status'] = "Image already exists: " . $filename;
        header('Location: http://localhost/vaishnodevi/admin/logo.php');
    } else {
        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES['new_logo2']['tmp_name'], $target_file)) {
            // Delete the old image if it exists and is different from the new image
            if ($old_image != '' && $old_image != $new_image && file_exists($target_dir . $old_image)) {
                unlink($target_dir . $old_image);
            }

            // Update the database
            $st = "UPDATE favicon SET favicon='$update_filename' WHERE id = '$stud_id'";
            $res = mysqli_query($cn, $st);

            if ($res) {
                $_SESSION['status'] = "Image updated successfully";
            } else {
                $_SESSION['status'] = "Image update failed";
            }
        } else {
            $_SESSION['status'] = "Failed to upload image";
        }
        header('Location: http://localhost/vaishnodevi/admin/logo.php');
    }
}
?>
