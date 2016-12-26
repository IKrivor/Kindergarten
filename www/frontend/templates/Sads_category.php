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

    <div id="sads-category-container">
        <div class="title">Сады</div>
        <div class="col-md-6 sads-category">
            <div class="sads-category-title-and-poster">
                <div class="sads-category-title">Солнышко</div>
                <div class="sads-category-poster"><img src="../img/sads-category-poster.png"></div>
            </div>
            <div class="sads-category-data">
                <div class="sads-category-adress-container">
                    <div class="sads-category-adress-title">Адрес:</div>
                    <div class="sads-category-adress-main-text">Lorem ipsum dolor sit amet</div>
                </div>
                <div class="sads-category-time-work-container">
                    <div class="sads-category-time-work-title">Режим работы:</div>
                    <div class="sads-category-time-work-main-text">Lorem ipsum dolor sit amet</div>
                </div>
                <div class="sads-category-contacts-container">
                    <div class="sads-category-contacts-title">Контакты:</div>
                    <div class="sads-category-contacts-main-text">Lorem ipsum dolor sit amet</div>
                </div>
            </div>
        </div>
        <div class="col-md-6 sads-category">
            <div class="sads-category-title-and-poster">
                <div class="sads-category-title">Солнышко</div>
                <div class="sads-category-poster"><img src="../img/sads-category-poster.png"></div>
            </div>
            <div class="sads-category-data">
                <div class="sads-category-adress-container">
                    <div class="sads-category-adress-title">Адрес:</div>
                    <div class="sads-category-adress-main-text">Lorem ipsum dolor sit amet</div>
                </div>
                <div class="sads-category-time-work-container">
                    <div class="sads-category-time-work-title">Режим работы:</div>
                    <div class="sads-category-time-work-main-text">Lorem ipsum dolor sit amet</div>
                </div>
                <div class="sads-category-contacts-container">
                    <div class="sads-category-contacts-title">Контакты:</div>
                    <div class="sads-category-contacts-main-text">Lorem ipsum dolor sit amet</div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>