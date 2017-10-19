<?
include '../../../includes/classes/connection.php';
$db = Connection::open();
$sql = $db->query('SELECT * FROM tblProducts');
$retArr = array();
if($db->affected_rows > 0){
    while($retval = $sql->fetch_assoc()){
        $retval_f = array($retval);
        $retArr = array_merge($retArr, $retval_f);
    }
} else {
    $retArr = array();
}
echo json_encode($retArr);
?>
