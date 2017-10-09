<?php #Inserts a new product to database
include '../../includes/classes/connection.php';

$dbconn = Connection::open();
$prod_name = $_POST['Name'];
$prod_price = $_POST['price'];
$prod_desc = $_POST['prodDesc'];
$prod_category = $_POST['prodCategory'];
// $prod_keywords = $_POST['keywords'];
// $target_file = $_POST['mainImage'];
// $target_file_multiple = $_POST['secondaryImages'];

//Upload image
// $main_image = $_FILES['uploadMainImage'];
// $secondary_image = $_FILES['uploadSecondaryImages'];
// $target_dir = 'http://localhost/images/uploads/';
// $target_file = $target_dir .time(). basename($_FILES["uploadMainImage"]["tmp_name"]);
// $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
// $check = getimagesize($_FILES["uploadMainImage"]["tmp_name"]);
// if ($check !== false) {
//     echo "File is an image - " . $check["mime"] . ".";
// }
// else {
//     echo "File is not an image.";
//     $uploadOk = 0;
// }

// $k = move_uploaded_file($_FILES["uploadMainImage"]["tmp_name"], $target_file);
// if ($k) {
//     echo "The file <code>" . basename($_FILES["uploadMainImage"]["name"]) . "</code> has been uploaded.";
// }
// else {
//     echo "Something went wrong.";
// }
$sql = "INSERT INTO tblProducts VALUES(0, '{$prod_name}', {$prod_price}, '{$prod_desc}', {$prod_category}, '', '', '', '', '')";
$dbconn->query($sql);
$dbconn->close();

?>
