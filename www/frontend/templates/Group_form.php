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
            <div class="title">Добавление группы</div>
            <div class="gr-form">
                <div class="inp-wrap">
                    <input type="text" id="gr-number" name="gr-number" required placeholder="Номер группы" />
                </div>
                <div class="inp-wrap">
                    <textarea id="gr-age-limit" name="gr-age-limit" required placeholder="Возрастные ограничения"></textarea>
                </div>
                <div class="inp-wrap">
                    <input type="text" id="gr-kolvo-mest" name="gr-kolvo-mest" required placeholder="Количество мест" />
                </div>
                <div class="inp-wrap">
                    <input type="text" id="gr-kolvo-free-mest" name="gr-kolvo-free-mest" required placeholder="Количество свободных мест" />
                </div>
                <div class="inp-wrap">
                    <input type="text" id="gr-price" name="gr-price" required placeholder="Стоимость в год" />
                </div>
                <div class="inp-wrap">
                <button id="gr_save">Сохранить</button>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>