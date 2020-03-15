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
        <?php if($_COOKIE['nuser'] == ''):?> 
            <div class="open-authorization__btn open-btn">
                Активировать бонус
            </div>

            <!-- registration form -->
            <form action="reg.php" method="post" class="reg__form data-form hide">
                <div class="form-title__wrap">
                    <div class="form__title">Авторизация</div>
                    <img src="img/back.png" width="23" class="form__back-img">
                </div>

                <input type="text" name="phone" placeholder="Телефон..." />

                <input type="text" name="email" placeholder="E-mail..." /> <br>

                <input type="checkbox" id="checkbox" name="permission" value="yes" />
                <label for="checkbox"><span class="ui"></span></label>
                <label for="">
                    <button type="button" class="conditions__btn" data-toggle="modal" data-target="#exampleModalLong">
                        СОГЛАСИЕ С УСЛОВИЯМИ
                    </button>
                </label>

                <div class="come-in__wrap">
                    <input type="submit" value="Выслать sms-код подтверждения" id="enter" class="confirm-phone__btn">
                </div>
                <div class="error__checkbox hide">необходимо согласиться с условиями</div>
            </form>
            <!-- end registration form -->

            <!-- Conditions Modal -->
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Условия использования</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                            Это согласие с условиями, длинное содержимое может прокручиваться
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                        </div>
                    </div>
                </div>
            </div>
            <script src="js/openRegForm.js"></script>
            <?php else: ?>
            <!-- promocode form -->
            <form action="promo.php" method="post" class="promocode__form data-form ">
                <div class="form-title__wrap">
                    <div class="form__title">Активация бонуса</div>
                </div>

                <input type="text" name="promocode" placeholder="Промокод..." />

                <div class="come-in__wrap">
                    <input type="submit" value="Открыть приз" class="confirm-phone__btn">
                </div>
            </form>
            <a href="exit.php">ВЫЙТИ</a>
            <!-- end promocode form -->
            <?php endif; ?>
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
            <form action="partner.php" method="post" class="feedback__form data-form hide">
                <div class="form-title__wrap">
                    <div class="form__title">Стать партнёром</div>
                    <img src="img/back.png" width="23" class="form__back-img">
                </div>

                <input type="text" name="name" placeholder="Ваше имя..." />

                <input type="text" name="phone" placeholder="Телефон..." />

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
    <script src="js/validate.js"></script>
    <script>
        var btnToFeedbackForm = document.querySelector('.open-partner__btn'),
            feedbackForm = document.querySelector('.feedback__form');

        btnToFeedbackForm.addEventListener('click', openFeedbackForm);


        function openFeedbackForm() {
            feedbackForm.classList.remove('hide');
            btnToFeedbackForm.classList.add('hide');
        }

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