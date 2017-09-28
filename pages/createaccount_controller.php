<?
include '../includes/classes/user.php';

$username = $_POST['u'];
$password = $_POST['p'];

$user = new User($username,"","","","","", $password);
$jsonRtn = $user->CreateAccount();
// $jsonRtn = json_decode($jsonRtn, true);

echo $jsonRtn;

?>
