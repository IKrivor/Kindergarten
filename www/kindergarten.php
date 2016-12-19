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
</head>
<body>
    <div class="container">
        <div class="top-menu">
            <div class="menu-item" id="o-sade-menu">О саде</div>
            <div class="menu-item" id="groups-menu">Группы</div>
            <div class="menu-item" id="exit">Выход</div>
        </div>

        <div id="sad-container"></div>
    </div>

</body>
</html>