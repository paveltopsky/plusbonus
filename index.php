<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <div class="container">
        <header class="header">
            <h2>купил - бонус получил PLUS</h2>
        </header>

        <main class="main">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Запустить модальное окно
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Регистрация / авторизация</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                        <form action="reg.php" method="post">

                            <div class="logModal-input-wrap">
                                <div class="logModal-row">
                                    <div class="logModal-row__text form-text">телефон:</div>
                                    <input type="text" name="phone" placeholder="ваш телефон" size="25" />
                                </div>
                            </div>

                            <hr>

                            <div class="logModal-input-wrap">
                                <div class="logModal-row">
                                    <div class="logModal-row__text form-text">email:</div>
                                    <input type="text" name="email" placeholder="ваш email" size="25" />
                                </div>
                            </div>
                        
                            <hr>

                            <div class="logModal-input-wrap sms-code__form hide">
                                <div class="logModal-row">
                                    <div class="logModal-row__text form-text">код смс:</div>
                                    <input type="text" name="scode" placeholder="5-ти значный код" size="25" />
                                </div>
                            </div>

                            <hr>

                            <input type="checkbox">
                            <span class="chechbox-text">согласие на обработку данных</span>
                            <input type="submit" value="Войти">
                        </form>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                            <button type="button" class="btn btn-primary save">Далее</button>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end Modal -->

        </main>

        <footer class="footer">

        </footer>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>

</body>

</html>