<?php
#TODO: Insert data into database
#TODO: Upload images
include "../../../includes/classes/connection.php";
$prodName = $_POST["prodName"];
$prodPrice = $_POST["prodprice"];
$prodDesc = $_POST["prodDesc"];
$prodMainImage = $_POST["prodMainImage"];
$prodSecondaryImage = $_POST["prodSecondaryImages"];

$db = Connection::open();
$sql = $db->query("INSERT INTO tblProducts(prod_name, prod_price, prod_description, prod_MainImage, prod_SecondaryImages) VALUES('{$prodName}', {$prodPrice}, '{$prodDesc}', '{$prodMainImage}', '{$prodSecondaryImage}')");

if ($sql) {
    $retval = array("status" => "SUCCESS", "statusMessage" => "Product insertion success. " . $prodSecondaryImage);
    echo json_encode($retval);
}
else {
    $retval = array("status" => "ERROR", "statusMessage" => $db->error);
    echo json_encode($retval);
}

?>
