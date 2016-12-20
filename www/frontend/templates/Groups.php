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
                        <th class="t-gr-name">Номер группы</th>
                        <th class="t-gr-name">Количество свободных мест</th>
                        <th class="t-gr-name">Количество занятых мест</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="t-gr"><input id="gr1" type="checkbox" class="user-checkbox"><label for="gr1"><span></span></label></td>
                        <td class="t-gr t-num">1</td>
                        <td class="t-gr">10</td>
                        <td class="t-gr">5</td>
                    </tr>
                    <tr>
                        <td class="t-gr"><input id="gr2" type="checkbox" class="user-checkbox"><label for="gr2"><span></span></label></td>
                        <td class="t-gr t-num">2</td>
                        <td class="t-gr">12</td>
                        <td class="t-gr">3</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>