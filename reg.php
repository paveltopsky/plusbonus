<?php


//require_once 'sms.ru.php'; // Подключение библиотеки 

$chioc = 1;
$ioc = 0;
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$scode = rand(1000,10000); 
$checkbox = ($_POST['permission']);


if(!empty($email) AND !empty($phone) AND !empty($checkbox)){
	
	$mysql = new mysqli('localhost','root','','datauser');
	$result = $mysql->query("SELECT * FROM users WHERE `email` = '$email' AND `ioc`='$chioc'");
	$user = $result->fetch_assoc () ;
    $mysql->close;
    

	if(count($user) ==0){
        
		$mysql = new mysqli('localhost','root','','datauser');
		$mysql->query("INSERT INTO `users`(`email`,`phone`,`ioc`,`scode`) VALUES('$email','$phone','$ioc','$scode')");

		//$smsru = new SMSRU('[ключ]'); // Авторизация
		//$data = new stdClass();
		//$data->to = $phone; // Номер получателя
		//$data->text = $scode; // Текст

		//$smsru->send_one($data); // Отправка

        $mysql->close;
	   	header('Location: input-sms.php');
		exit();
		
	}else{
		$mysql->close;
		setcookie("nuser", $user['email'], time() +3600);
		header('Location: index.php');
		exit();

	}
}else{
	
	echo "Заполните все поля и примите условия соглашения";
	exit();
}

?>