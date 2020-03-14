<?php
$scode= ($_POST['scode']);

$mysql= new mysqli('localhost','root','','datauser');

$resultyt = $mysql->query("SELECT * FROM users WHERE scode = '$scode'");
$user = $resultyt->fetch_assoc();

if(count($user) ==0){
    echo "Проверьте код";
    exit();
}
$nioc = 'mb';

$mysql->query("INSERT INTO `users`(`ioc`) VALUES('$nioc')");

setcookie(`user`, $user[email], time()+3600,"/");

$mysql->close;
header('Location:/');
exit();

?>