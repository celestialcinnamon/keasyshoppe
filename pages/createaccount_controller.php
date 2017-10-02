<?
include '../includes/classes/user.php';

$username = $_POST['u'];
$password = $_POST['q'];

$user = new User($username, "", "", "","","","","","",$password);
$returnValue = $user->CreateAccount();
// setcookie("accUsername", json_decode($returnValue)['username']);
echo $returnValue;


?>
