<?php
session_start();
session_destroy();
setcookie("username", "", time() - 3600, "/");
setcookie("user_id", "", time() - 3600, "/");
header("Location: views/login.php");
exit();
?>
