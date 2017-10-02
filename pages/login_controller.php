<?
include '../includes/classes/user.php';
$username = $_POST['u'];
$password = $_POST['query'];

$user = new User($username);
$retval = $user->LogIn($password, LoginMode::KEASYSHOPPE);
echo $retval;
?>