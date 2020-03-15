<?php


    // Набор символов для генерации кодов
    $str='1234567890ABCDEF';
    // Длина кода без учета разделителей
    $code_length=16;
    // Нужное количество кодов
    $codes_count=2;
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
    $c= 0;
    $f = -1;
    

while($c<$codes_count ){
     $c++;
     $f++;
    $promocodes= $codes[$f];
     $mysql= new mysqli('localhost','root','','datauser');
    $mysql->query("INSERT INTO `promodata`(`promocode`) VALUES('$promocodes')");
        
}


   


?>