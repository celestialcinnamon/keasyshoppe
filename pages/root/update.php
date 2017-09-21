<?php
$con = mysqli_connect('localhost', 'admin', 'keasyshoppe', 'db_testKeasy2');
mysqli_select_db($con, 'db_testKeasy2');

$sql = "UPDATE {$_GET['table']} SET prodName = '{$_GET['prodName']}', prodQty = {$_GET['prodQty']}, prodPrice = {$_GET['prodPrice']}".
        " WHERE prodID = {$_GET['id']}";
mysqli_query($con, $sql);

if($_GET['refresh']){
    $sql = "SELECT * FROM tblTrial WHERE prodID = {$_GET['id']}";
    $result = mysqli_query($con, $sql) or die(mysqli_error($con));
    $resultsArray = mysqli_fetch_assoc($result);

    echo json_encode($resultsArray);
}
mysqli_close($con);
?>
