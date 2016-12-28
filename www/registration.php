<?php
header('Content-Type: text/html; charset=utf-8]')?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kindergarten</title>

    <link href="frontend/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="frontend/css/style.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="frontend/bootstrap/js/bootstrap.min.js"></script>
    <script src="frontend/js/registr.js"></script>
</head>
<body>
<div class="container">
    <div class="row top-place"></div>
    <div class="row">
        <div class="main-title">Регистрация</div>
        <div class="title">Кто Вы?</div>
        <div id="registr-place">
            <div id="choice">
                <select id="choice-select">
                    <option>- Не выбрано</option>
                    <option>Представитель детского сада</option>
                    <option>Родитель</option>
                </select>
            </div>

            <form id="kinder-choice" class="hidden">
                <div class="inp-wrap">
                    <input type="text" id="reg-sad-name" name="reg-sad-name" placeholder="Название детского сада" />
                </div>
                <div class="inp-wrap">
                    <textarea id="reg-sad-address" name="reg-sad-address" placeholder="Адрес детского сада"></textarea>
                </div>
                <div class="inp-wrap">
                    <input type="text" id="reg-sad-tel" name="reg-sad-tel" placeholder="Телефон" />
                </div>
<!--                <div class="inp-wrap">-->
<!--                    <label id="label-lic">Лицензия детского сада</label>-->
<!--                    <input type="file" name="uploader" id="uploader" placeholder="Лицензия детского сада">-->
<!--                </div>-->
                <div class="inp-wrap">
                    <input type="text" id="reg-sad-login" name="reg-sad-login" placeholder="Логин" />
                </div>
                <div class="inp-wrap">
                    <input type="password" id="reg-sad-pass" name="reg-sad-pass" placeholder="Пароль" />
                </div>
                <div class="inp-wrap">
                    <input type="password" id="reg-sad-repass" name="reg-sad-repass" placeholder="Повторите пароль" />
                </div>
                <div class="inp-wrap">
                    <div id="er-mes"></div>
                </div>
                <div class="inp-wrap">
                    <button type="submit" name="sad-reg" class="reg" id="sad-reg">Зарегистрироваться</button>
                </div>
            </form>

            <div id="parent-choice" class="hidden">
                <div class="inp-wrap">
                    <input type="text" id="reg-par-lastname" name="reg-par-lastname" placeholder="Фамилия" />
                </div>
                <div class="inp-wrap">
                    <input type="text" id="reg-par-name" name="reg-par-name" placeholder="Имя" />
                </div>
                <div class="inp-wrap">
                    <input type="text" id="reg-par-patr" name="reg-par-patr" placeholder="Отчество" />
                </div>
                <div class="inp-wrap">
                    <input type="text" id="reg-par-login" name="reg-par-login" placeholder="Логин" />
                </div>
                <div class="inp-wrap">
                    <input type="password" id="reg-par-pass" name="reg-par-pass" placeholder="Пароль" />
                </div>
                <div class="inp-wrap">
                    <input type="password" id="reg-par-repass" name="reg-par-repass" placeholder="Повторите пароль" />
                </div>
                <div class="inp-wrap">
                    <button type="submit" class="reg" id="par-reg">Зарегистрироваться</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row top-place">
        <div id="rights">
            Все права защищены &copy <?php echo date('Y');?>
        </div>
    </div>
</div>
</body>
</html>