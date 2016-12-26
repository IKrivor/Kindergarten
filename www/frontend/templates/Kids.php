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
        <div class="menu-item" id="o-sade-menu">О саде</div>
        <div class="menu-item" id="groups-menu">Группы</div>
        <div class="menu-item" id="exit">Выход</div>
    </div>

    <div id="sad-container">
        <div class="row">
            <div class="button-place">
                <button id="add-group" class="add-but">Добавить</button>
                <button id="update-group" class="update-but">Редактировать</button>
                <button id="remove-group" class="remove-but">Удалить</button>
            </div>
            <table id="table-groups">
                <thead>
                <tr>
                    <th></th>
                    <th class="t-gr-name">ФИО</th>
                    <th class="t-gr-name">Дата рождения</th>
                    <th class="t-gr-name">Свидетельство о рождении</th>
                    <th class="t-gr-name">Страховой медицинский полис</th>
                    <th class="t-gr-name">Справка о здоровье</th>
                    <th class="t-gr-name">Сертификат прививок</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="t-gr"><input id="kid1" type="checkbox" class="user-checkbox"><label for="kid1"><span></span></label></td>
                    <td class="t-gr t-num">Иванов Иван Иванович</td>
                    <td class="t-gr">66.66.6666</td>
                    <td class="t-gr"><img src="../img/tick.png"></td>
                    <td class="t-gr"><img src="../img/tick.png"></td>
                    <td class="t-gr"><img src="../img/tick.png"></td>
                    <td class="t-gr"><img src="../img/tick.png"></td>
                </tr>
                <tr>
                    <td class="t-gr"><input id="kid2" type="checkbox" class="user-checkbox"><label for="kid2"><span></span></label></td>
                    <td class="t-gr t-num">Иванов Иван Иванович</td>
                    <td class="t-gr">66.66.6666</td>
                    <td class="t-gr"><img src="../img/delete.png"></td>
                    <td class="t-gr"><img src="../img/delete.png"></td>
                    <td class="t-gr"><img src="../img/delete.png"></td>
                    <td class="t-gr"><img src="../img/delete.png"></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>