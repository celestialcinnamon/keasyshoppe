<?php 

    $con = mysqli_connect('localhost', 'admin', 'keasyshoppe', 'db_testKeasy2');
    mysqli_select_db($con, 'db_testKeasy2');

    $sql = 'SELECT * FROM tblProducts';
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) > 0){
        $rows = null;
        while($row = mysqli_fetch_assoc($result)){
            $rows .= json_encode($row).",";
        }
        echo json_encode($rows);
    }
    else{
        echo "0 results";
    }
?>