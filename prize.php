<?php
  $userhash = $_COOKIE["userhash"]; // Узнаём, что за пользователь
  if (!$userhash) {
    /* Если это новый пользователь, то добавляем ему cookie, уникальные для него */
    $userhash = uniqid();
    setcookie("userhash", $userhash, 0x6FFFFFFF);
  }
  $ip = ip2long($_SERVER["REMOTE_ADDR"]); // Преобразуем IP в число
  $mysql = new mysqli("localhost", "root", "", "datauser"); // Соединяемся с базой
  $mysql->query("INSERT INTO `visits` ( `ip`) VALUES ('$ip')"); // Добавляем запись
  $result = $mysql->query("SELECT * FROM visits WHERE `ip` = '$ip'");
  $datainfo = $result->fetch_assoc () ;
  $counteruser= $datainfo ['id_user'];
  $mysql->query("UPDATE stats SET visit = visit + 1 ");
  $mysql->close(); // Закрываем соединение
  
      
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PLUSБОНУС</title>
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Main style File -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <!-- Media Queries File -->
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/prize.css">
    <!-- Bootstrap4 CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
</head>

<body>

    <main class="main">
        <div class="container">

            <canvas id="world"></canvas>

            <div class="giftbox__wrap">
                <img src="img/giftbox.png" width="100">
            </div>

            <div class="prize__wrap hide">
                Поздравляем!<br> Проверьте почту!
            </div>

        </div>
        <!-- /.container -->
    </main>
    <!-- /.main -->

    <!-- JQuery connection -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <!-- Bootstrap4 connection -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <!-- Other scripts -->
    <script src="js/prize.js"></script>

</body>

</html>