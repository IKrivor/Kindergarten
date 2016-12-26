<?php
header('Content-Type: text/html; charset=utf-8]')?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kindergarten</title>

    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="top-menu">
        <div class="menu-item" id="private-data-menu">Личные данные</div>
        <div class="menu-item" id="kids-menu">Дети</div>
        <div class="menu-item" id="sady-menu">Сады</div>
        <div class="menu-item" id="zayavky-menu">Заявки</div>
        <div class="menu-item" id="exit">Выход</div>
    </div>

    <div id="parents-container">
        <div class="row">
            <div class="dashed-place">
                <div class="title">Личные данные</div>


                <div class="parents-inputs">
                    <div class="inp-wrap">
                        <input type="text" id="sad-name" name="parents-fam" placeholder="Фамилия" />
                    </div>
                    <div class="inp-wrap">
                        <input type="text" id="sad-name" name="parents-name" placeholder="Имя" />
                    </div>
                    <div class="inp-wrap">
                        <input type="text" id="sad-name" name="parents-otch" placeholder="Отчество" />
                    </div>
                    <div class="inp-wrap">
                        <textarea id="sad-address" name="parents-mail" placeholder="Электронная почта"></textarea>
                    </div>
                    <div class="inp-wrap">
                        <input type="text" id="sad-tel" name="parents-tel" placeholder="Телефон" />
                    </div>
                    <div class="inp-wrap">
                        <label id="label-pass">Копия паспорта</label>
                        <input type="file" name="uploader-pass" id="uploader-pass" placeholder="Копия паспорта">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>