<?php

    $cn = mysqli_connect("localhost", "root", "") or die ("Not connected");
    $db = mysqli_select_db($cn, "vaishnodevi_contact") or die ("Not connected");

    $id = $_POST["id"];
    $sql = "SELECT * FROM `email` WHERE `id`=$id";
    $result = mysqli_query($cn, $sql);
    $row = mysqli_fetch_assoc($result);
    $status = $row["status"];

    if ($status == "1") {
        $status = "0";
    }else{
        $status = "1";
    }

    $update = "UPDATE `email` SET `status` = '$status' WHERE id = '$id'";
    $result = mysqli_query($cn, $update);
    if($result){
        echo $status;
    }
?>