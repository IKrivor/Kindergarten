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

    <div id="zayavky-container">
        <div class="title">Заявки</div>
        <div class="row">
            <table id="table-zayavky">
                <thead>
                <tr>
                    <th class="t-zayavky-name">Дата подачи заявки</th>
                    <th class="t-zayavky-name">ФИО ребенка</th>
                    <th class="t-zayavky-name">Название сада</th>
                    <th class="t-zayavky-name">Статус</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="t-zayavky">01.01.2016</td>
                    <td class="t-zayavky">Иванов Иван иванович</td>
                    <td class="t-zayavky">Солнышко</td>
                    <td class="t-zayavky">Принята</td>
                </tr>
                <tr>
                    <td class="t-zayavky">02.01.2016</td>
                    <td class="t-zayavky">Иванов Иван иванович</td>
                    <td class="t-zayavky">Солнышко</td>
                    <td class="t-zayavky">В рассмотрении</td>
                </tr>
                <tr>
                    <td class="t-zayavky">03.01.2016</td>
                    <td class="t-zayavky">Иванов Иван иванович</td>
                    <td class="t-zayavky">Солнышко</td>
                    <td class="t-zayavky">Отклонена</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>