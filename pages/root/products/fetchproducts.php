<?
include '../../../includes/classes/connection.php';
$db = Connection::open();
$sql = $db->query('SELECT * FROM tblProducts');
$retArr = array();
while($retval = $sql->fetch_assoc()){
    $retArr = array_merge($retArr, $retval);
#    echo json_encode($retval);
}
echo json_encode($retArr);
?>
