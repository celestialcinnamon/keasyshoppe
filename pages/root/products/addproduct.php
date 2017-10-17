<?php
#TODO: Insert data into database
#TODO: Upload images
include "../../../includes/classes/connection.php";
$prodName = $_POST["prodName"];
$prodPrice = $_POST["prodprice"];
$prodDesc = $_POST["prodDesc"];

$db = Connection::open();
$sql = $db->query("INSERT INTO tblProducts(prod_name, prod_price, prod_description) VALUES('{$prodName}', {$prodPrice}, '{$prodDesc}')");

if($sql){
    $retval = array("status" => "SUCCESS", "statusMessage" => "Product insertion success.");
    echo json_encode($retval);
} else {
    $retval = array("status"=>"ERROR", "statusMessage"=>$db->error);
    echo json_encode($retval);
}

?>
