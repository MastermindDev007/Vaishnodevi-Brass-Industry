<?php

include '../includes/php/dbcon2.php';

if (isset($_POST['add_footer_logo'])) {
    $stud_id = $_POST['stud_id1'];
    $new_image = $_FILES['new_logo1']['name'];
    $old_image = $_POST['old_logo1'];
    $target_dir = "../assets/logo/uploads1/"; // Specify the directory where you want to save the uploaded files
    $target_file = $target_dir . basename($new_image);

    if ($new_image != '') {
        $update_filename = $new_image;
    } else {
        $update_filename = $old_image;
    }

    if (move_uploaded_file($_FILES['new_logo1']['tmp_name'], $target_file)) {
        // Delete the old image if it exists and is different from the new image
        if ($old_image != '' && $old_image != $new_image && file_exists($target_dir . $old_image)) {
            unlink("../assets/logo/uploads1/" . $old_image);
        }
        
        // Update the database
        $st = "UPDATE footer_logo SET footer_logo='$update_filename' WHERE id = '$stud_id'";
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
?>
