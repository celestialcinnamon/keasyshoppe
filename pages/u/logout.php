<?php 
setcookie("accUsername", "", time() - 3600, "/");
header("Location: index.php");
?>