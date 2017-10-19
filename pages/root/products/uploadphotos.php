<?
if (isset($_FILES["productPhoto"])) {
    // chmod($retval['productPhoto']['tmp_name'], 0777);
    $seed = time();
    move_uploaded_file($_FILES['productPhoto']['tmp_name'], "../../../images/uploads/" . $seed . "_" . $_FILES['productPhoto']['name']);
    $retval_1 = $seed . "_" . $_FILES['productPhoto']['name'];
    $retval = array('fileName' => $seed . "_" . $_FILES['productPhoto']['name'], "permissions"=>fileperms("../../../images/uploads/".$retval_1), "chown"=>
    //chown("/opt/lampp/htdocs/keasyshoppe/images/uploads/" . $retval_1, 'celestialcinammon'), "chmod"=>
    chmod("/opt/lampp/htdocs/keasyshoppe/images/uploads/" . $retval_1, 0777));
    echo json_encode($retval);
}
?>
