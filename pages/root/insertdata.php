<?php
$con = mysqli_connect('localhost', 'admin', 'keasyshoppe', 'db_testKeasy2');
if (!$con) {
    die("Unable to connect to database." . mysqli_error($con));
}
mysqli_select_db($con, "db_testKeasy2");
$prodName = $_POST["Name"];
$prodDesc = $_POST["prodDesc"];
$prodCategory = $_POST["prodCategory"];
$keywords = json_decode($_POST["keywords"]);
$prodPrice = $_POST["prodPrice"];
$sql = "INSERT INTO tblProducts VALUES(0, '$prodName','$prodDesc','$keywords',$prodPrice)";
echo $sql;
$result = mysqli_query($con, $sql) or die("Failed to execute query." . mysqli_error($con));
mysqli_close($con);
?>