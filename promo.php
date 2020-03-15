<?php

    // Набор символов для генерации кодов
    $str='1234567890ABCDEF';
    // Длина кода без учета разделителей
    $code_length=16;
    // Нужное количество кодов
    $codes_count=3;
    // Позиции разделителя (0 - не надо)
    $code_separartor=0;
     
    $tmp=array();
    $str_length=strlen($str)-1;
     
    // Цикл до заполнения массива
    while (count($tmp)<$codes_count) {
        // Сгенерировать индекс массива
        $code='';
        for ($i=0; $i<$code_length; $i++){
            // Разделитель можно не добавлять
            if ($i>0 && $code_separartor>0 && $i%$code_separartor==0) { $code.='-';}
          $code.=substr($str, mt_rand(0,$str_length), 1);
        }
        // Или в массив добавится новый элемент, или
        // перепишется поверх уже имеющийся
        $tmp[$code]=1;
    }
    // Теперь в массиве $codes уникальные коды
	$codes=array_keys($tmp);
	
$newpromoarrf = $codes[0];	
$newpromoarrs = $codes[1];	
$newpromoarrt = $codes[2];	
$to = ($_COOKIE['user']);
$subject = "Ваш подарок";
$headers = "Content-type: text/html; charset=utf-8 \r\n";
$promocode =($_POST['promocode']) ;
$letterfirst = 'Текст 1 письма';
$lettersecond = 'Текст 2 письма';
$letterthird = 'Текст 3 письма';
$r = rand(1,3);
$mysql= new mysqli('localhost','root','','datauser');
$mysql->query("UPDATE stats SET click = click + 1 ");
$arrf = $mysql->query("SELECT * FROM promodata WHERE `promocode` = '$newpromoarrf'");
$arrs = $mysql->query("SELECT * FROM promodata WHERE `promocode` = '$newpromoarrs'");
$arrt = $mysql->query("SELECT * FROM promodata WHERE `promocode` = '$newpromoarrt'");
$resultarrf= $arrf->fetch_assoc();
$resultarrs= $arrs->fetch_assoc();
$resultarrt= $arrt->fetch_assoc();
$mysql->close;




$mysql= new mysqli('localhost','root','','datauser');
$loto = $mysql->query("SELECT * FROM promodata WHERE `promocode` = '$promocode'");
$resultpromo = $loto->fetch_assoc();
$mysql->close;

if(count($resultpromo) ==0){
	header('Location: index.php');
	exit();
}else{
	$deletepromo =  ($resultpromo['ID']); 	
	if($r == 1){
		$message = $letterfirst;
     }else{
         if($r == 2){
			$message = $lettersecond;
		 }else{
			$message = $letterthird;
		 }
     }

	if(mail ($to, $subject, $message, $headers)){
		 $mysql= new mysqli('localhost','root','','datauser');
		 $mysql->query("UPDATE stats SET mail = mail+ 1 ");
		 $mysql->close;
		   if(count($resultarrf) ==0){
			$mysql= new mysqli('localhost','root','','datauser');
			$mysql->query("REPLACE INTO promodata VALUES('$deletepromo','$newpromoarrf') ");
			$mysql->close;
			header('Location: prize.php');
	  		exit();
		   }else{
			   	if(count($resultarrs) ==0){
					$mysql= new mysqli('localhost','root','','datauser');
					$mysql->query("REPLACE INTO promodata VALUES('$deletepromo','$newpromoarrs') ");
					$mysql->close;
					header('Location: prize.php');
	  				exit();
				   }else{
					$mysql= new mysqli('localhost','root','','datauser');
					$mysql->query("REPLACE INTO promodata VALUES('$deletepromo','$newpromoarrt') ");
					$mysql->close;
					header('Location: prize.php');
	  				exit();
				   }
		   }
	 
	
     //$mysql->query("DELETE FROM promodata WHERE `ID` = '$deletepromo'");
     //$mysql->close;
	// header('Location: index.php');
	  //exit();
	}else{
        header('Location: index.php');
    }
    

}

?>