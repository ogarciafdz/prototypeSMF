<?php

include "con.php";

$target_dir = "/var/lib/openshift/55fcdeeb2d5271007b000009/app-root/repo/prototypeSMF/files/images/products/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


$name = $_POST['nombre'];
$description = $_POST['descripcion'];
$type = $_POST['type'];
$sku = $_POST['sku'];
$price = $_POST['price'];
$ctn = $_POST['ctn'];
$visi = $_POST['visi'];


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

        $imagen = basename( $_FILES["fileToUpload"]["name"]);


        mysql_query("INSERT INTO `smfprototype`.`products`
        (`id`, `name`, `description`, `type`, `SKU`, `price`, `qty`,`Visibility`, `Status`, `imagepath`)
        VALUES (NULL, '$name', '$description', '$type', '$sku', '$price', '$ctn',
        '$visi', '1', 'files/images/products/$imagen');") or die (mysql_error());



        header("Location: ../../admin/new.php");
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 23/09/15
 * Time: 12:43 PM
 */