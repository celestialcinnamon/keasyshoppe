<?php 
$target_dir = './uploads';
$target_file = $target_dir . basename($_FILES["uploadMainImage"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
//check if image file is an actual image or file image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["uploadMainImage"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
    }
    else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

//check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, we already have that picture.";
    $uploadOk = 0;
}

if (! ($uploadOk == 0)) {
    if (move_uploaded_file($_FILES["uploadMainImage"]["tmp_name"], $target_file)) {
        echo "The file <code>" . basename($_FILES["uploadMainImage"]["name"]) . "</code> has been uploaded.";
    }
    else {
        echo "Something went wrong.";
    }
}
?>