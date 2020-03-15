<?php
setcookie("nuser", $user['email'], time() - 2000000000);
header('Location: index.php');
?>
