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
    <link rel="stylesheet" href="css/style.css">
    <!-- Media Queries File -->
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/style-form.css">
    <!-- Bootstrap4 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

    <header class="header">
        <div class="container">
            <div class="header__title">PLUS<span class="header__title--bold">БОНУС</span></div>

            <div class="header__subtitle">купил - бонус получил</div>
            <div class="header__place"></div>
        </div>
        <!-- /.container -->
    </header>
    <!-- /.header -->

    <main class="main">
        <div class="container">

            <!-- sms-code form -->
            <form action="check.php" method="post" class="confirm__form data-form">
                <div class="form-title__wrap">
                    <div class="form__title">Подтверждение</div>
                </div>

                <input type="text" name="scode" placeholder="Код из sms..." />

                <div class="come-in__wrap">
                    <input type="submit" value="Авторизоваться" class="confirm-phone__btn">
                </div>
            </form>
            <!-- end sms-code form -->

        </div>
        <!-- /.container -->
    </main>
    <!-- /.main -->

    <footer class="footer">
        <div class="container">

            <div class="open-partner__btn open-btn">
                Стать партнёром
            </div>
            <!-- feedback form -->
            <form action="reg.php" method="post" class="feedback__form data-form hide">
                <div class="form-title__wrap">
                    <div class="form__title">Стать партнёром</div>
                    <img src="img/back.png" width="23" class="form__back-img">
                </div>


                <input type="text" name="phone" placeholder="Ваше имя..." />

                <input type="text" name="email" placeholder="Телефон..." />

                <input type="text" name="email" placeholder="E-mail..." />

                <textarea type="text" name="message" placeholder="Сообщение..." class="feedback__textarea"></textarea>

                <div class="come-in__wrap">
                    <input type="submit" value="Отправить предложение" class="confirm-phone__btn">
                </div>
            </form>
            <!-- end feedback form -->
        </div>
        <!-- /.container -->
    </footer>
    <!-- /.footer -->

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
    <script src="js/main.js"></script>

    <script>
        var btnToFeedbackForm = document.querySelector('.open-partner__btn'),
            confirmForm = document.querySelector('.confirm__form');

        Array.from(document.querySelectorAll('.form__back-img'), function (el) {
            el.onclick = function () {
                closeForm();
            }
        })

        function closeForm() {
            feedbackForm.classList.add('hide');
            btnToFeedbackForm.classList.remove('hide');
        }
    </script>

</body>

</html>