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
                <button id="waiting" class="active-but">Подавшие заявку</button>
                <button id="accepted" class="deactive-but">Принятые</button>
            </div>
            <table id="table-waiting">
                <thead>
                <tr>
                    <th class="t-waiting-name">Дата подачи заявки</th>
                    <th class="t-waiting-name">ФИО ребенка</th>
                    <th class="t-waiting-name">Дата рождения</th>
                    <th class="t-waiting-name">ФИО родителя</th>
                    <th class="t-waiting-name">Телефон родителя</th>
                    <th class="t-waiting-name"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="t-waiting">01.01.2016</td>
                    <td class="t-waiting">Иванов Иван иванович</td>
                    <td class="t-waiting">01.01.2016</td>
                    <td class="t-waiting">Иванов Иван иванович</td>
                    <td class="t-waiting">89008002132</td>
                    <td class="t-waiting">Принять | Отклонить</td>
                </tr>
                <tr>
                    <td class="t-waiting">01.01.2016</td>
                    <td class="t-waiting">Иванов Иван иванович</td>
                    <td class="t-waiting">01.01.2016</td>
                    <td class="t-waiting">Иванов Иван иванович</td>
                    <td class="t-waiting">89008002132</td>
                    <td class="t-waiting">Принять | Отклонить</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>