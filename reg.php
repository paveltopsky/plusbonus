<?php

$ioc = 0;
$login = trim($_POST['email']);

$phone = trim($_POST['phone']);

$pass = filter_var(trim($_POST['pass']), 
FILTER_SANITIZE_STRING);

$scode = rand(1000,10000); 

$mysql = new mysqli('localhost','root','','datauser');

$mysql->query("INSERT INTO `users`(`login`,`pass`,`phone`,`ioc`,`scode`) VALUES('$login','$pass','$phone','$ioc','$scode')");

$mysql->close;

header('Location:/')

?>