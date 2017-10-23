<?php
#TODO: Insert data into database
#TODO: Upload images
include "../../../includes/classes/connection.php";
$prodName = $_POST["prodName"];
$prodPrice = $_POST["prodprice"];
$prodDesc = $_POST["prodDesc"];
$prodMainImage = $_POST["prodMainImage"];
$prodSecondaryImage = $_POST["prodSecondaryImages"];
$prodKeywords = $_POST["prodKeywords"];

$prodKeywords = json_encode($prodKeywords);
$prodKeywords[0] = '[';
$prodKeywords[strlen($prodKeywords)-1]=']';

$db = Connection::open();
$sql = $db->query("INSERT INTO tblProducts(prod_name, prod_price, prod_description, prod_MainImage, prod_SecondaryImages, prod_keywords) VALUES('{$prodName}', {$prodPrice}, '{$prodDesc}', '{$prodMainImage}', '{$prodSecondaryImage}', '{$prodKeywords}')");

if ($sql) {
    $retval = array("status" => "SUCCESS", "statusMessage" => "Product insertion success. " . $prodSecondaryImage);
    echo json_encode($retval);
}
else {
    $retval = array("status" => "ERROR", "statusMessage" => $db->error);
    echo json_encode($retval);
}

function parseKeywords($keywords){
    $keywords = json_decode($keywords);
    $arrayOfKeywords = array();
    foreach($keywords as $keyword){
        $arrayOfKeywords[] = json_decode(json_encode($keyword), true)['tag'];
    }
    return $arrayOfKeywords;
}

?>
