<?
if(isset($_FILES["productPhoto"])){
    move_uploaded_file($_FILES['productPhoto']['tmp_name'],"../../../images/uploads/".time()."_".$_FILES['productPhoto']['name']);
    $retval = array('fileName'=>time()."_".$_FILES['productPhoto']['name']);
    echo json_encode($retval);
}
?>