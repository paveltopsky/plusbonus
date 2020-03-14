<?php
if(!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['phone'])){

  $headers = "Content-type: text/html; charset=windows-1251 \r\n";

  $to = "spamboxx@mail.ru";
  $subject = "Стать партнером";
  $letter = 'Данные: \r\n';
  $letter .= 'Имя: '.$_POST['name'].'\r\n';
  $letter .= 'Email: '.$_POST['email'].'\r\n';
  $letter .= 'Телефон: '.$_POST['phone'].'\r\n';
  $letter .= 'Сообщение: '.$_POST['message'].'\r\n';

    if(mail ($to, $subject, $message, $headers);){
    header('Location:/');
     } else {
    header('Location:/');
     }

} else {
    header('Location:/');
}

?>