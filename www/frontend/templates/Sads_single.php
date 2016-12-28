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

    <div id="sads-single-container">
        <div class="sads-single-and-description">
            <div class="col-md-6 sads-single">
                <div class="sads-single-title-and-poster">
                    <div class="sads-single-title">Солнышко</div>
                    <div class="sads-single-poster"><img src="../img/sads-category-poster.png"></div>
                </div>
                <div class="sads-single-data">
                    <div class="sads-single-adress-container">
                        <div class="sads-single-adress-title">Адрес:</div>
                        <div class="sads-single-adress-main-text">Lorem ipsum dolor sit amet</div>
                    </div>
                    <div class="sads-single-time-work-container">
                        <div class="sads-single-time-work-title">Режим работы:</div>
                        <div class="sads-single-time-work-main-text">Lorem ipsum dolor sit amet</div>
                    </div>
                    <div class="sads-single-contacts-container">
                        <div class="sads-single-contacts-title">Контакты:</div>
                        <div class="sads-single-contacts-main-text">Lorem ipsum dolor sit amet</div>
                    </div>
                </div>
            </div>
            <div class=" col-md-6 description">"Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                id est laborum.
            </div>
        </div>
        <div class="row sads-single-gallery"></div>
        <div id="sads-single-join-group-container">
            <div class="row">
                <table id="table-join-group">
                    <tbody>
                    <tr>
                        <td class="t-join-group">Номер группы<br/>1</td>
                        <td class="t-join-group">Количество мест<br/>2</td>
                        <td class="t-join-group">Стоимость<br/>1500 руб/год</td>
                        <td class="t-join-group"><button id="join-group">Подать заявку</button></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div id="sads-single-join-group-container">
            <div class="row">
                <table id="table-join-group">
                    <tbody>
                    <tr>
                        <td class="t-join-group">Номер группы<br/>2</td>
                        <td class="t-join-group">Количество мест<br/>5</td>
                        <td class="t-join-group">Стоимость<br/>1800 руб/год</td>
                        <td class="t-join-group"><button id="join-group">Подать заявку</button></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>