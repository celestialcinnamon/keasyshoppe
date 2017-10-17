<?php 

    $con = mysqli_connect('localhost', 'admin', 'keasyshoppe', 'db_keasyshoppe');
    mysqli_select_db($con, 'db_keasyshoppe');

    $sql = 'SELECT * FROM tblProducts';
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) > 0){
        echo json_encode(mysqli_fetch_assoc($result));
    }
    else{
        echo json_encode(array("status"=>"0 results"));
    }
?>
