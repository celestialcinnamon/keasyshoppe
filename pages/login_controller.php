<?
include '../includes/classes/user.php';
$username = $_POST['u'];
$password = $_POST['query'];

$user = new User($username);
$user->LogIn($password, KEASYSHOPPE);

?>