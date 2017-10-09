<?php
include '../classes/config.php';
$target_dir = "../../images/uploads/";
$target_file = $target_dir.time().basename($_FILES["profilepic"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
echo isset($_POST["submit"])+"<br />";
echo $target_file."<br/>";
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["profilepic"]["tmp_name"]);
    if($check !== false){
        //TODO: File is an image
        echo "File is an image: ".$check["mime"];
        $uploadOk = 0;
    } 
    if (file_exists($target_file)){
        //TODO: File exists
        echo "We already have that file";
        $uploadOk = 0;
    }

    if(! ($uploadOk == 0)){
        echo $target_dir."\n";

        $k = move_uploaded_file($_FILES["profilepic"]["tmp_name"], $target_file);
        echo $k;
        if($k){
            $j = array("status"=>DB_UPLOAD_IMAGE_SUCCESS, "statusMessage"=>"Image file uploaded successfully", "filePath"=>$target_file);
            echo json_encode($j);
        }
    } else {
        echo "Something went wrong.";
    }
}
?>