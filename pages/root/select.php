<?php
$dbHost = 'localhost';
$dbuser = 'admin';
$dbpass = 'keasyshoppe';
$db = 'db_testKeasy2';
$connection = mysqli_connect($dbHost, $dbuser, $dbpass, "db_testKeasy2");

// mysqli_select_db($connection, "db_testKeasy2");

if(! $connection ){
    die("Unable to connect to MySQL database server.\n".mysqli_error($connection));
}

$sql = "SELECT * FROM tblTest";
$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){}
}
?>