<?php

require_once 'sms.ru.php'; // Подключение библиотеки 

$chioc = 'mb';
$ioc = 'sc';
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$scode = rand(1000,10000); 
// $checkbox = ($_POST['permission']);

$mysql = new mysqli('localhost','root','','datauser');

if(!empty($email) AND !empty($phone)){

    $result = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email' AND `ioc` = '$chioc'");
    $user = $result->fetch_assoc();
    print_r($user);

    if(count($user) == 0){

        $mysql->query("INSERT INTO `users`(email,phone,ioc,scode) VALUES('$email','$phone','$ioc','$scode')");

        // $smsru = new SMSRU('[30F9AC8B-47C4-B2DC-8A1E-26FCDE100B3A]'); // Авторизация
        // $data = new stdClass();
        // $data->to = $phone; // Номер получателя
        // $data->text = $scode; // Текст

        // $smsru->send_one($data); // Отправка

        // if ($sms->status == "OK") { // Запрос выполнен успешно
        //     echo "Сообщение отправлено успешно. ";
        //     echo "ID сообщения: $sms->sms_id. ";
        //     echo "Ваш новый баланс: $sms->balance";
        // } else {
        //     echo "Сообщение не отправлено. ";
        //     echo "Код ошибки: $sms->status_code. ";
        //     echo "Текст ошибки: $sms->status_text.";
        // }

        // header('Location:/');
        $mysql->close;
        exit();

    }else{
        setcookie(`user`, $user[email], time()+3600,"/");
        $mysql->close;
        exit();

    }
} else{

    echo "Заполните все поля и примите условия соглашения";
    exit();

}

?>