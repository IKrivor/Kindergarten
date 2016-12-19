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
            <div class="dashed-place">
                <div class="title">Основная информация</div>
                <div class="col-md-4">
                    <div id="no_img">
                        <img src="../img/photo-camera.png" id="img_no"/>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="inp-wrap">
                        <input type="text" id="sad-name" name="sad-name" placeholder="Название детского сада" />
                    </div>
                    <div class="inp-wrap">
                        <textarea id="sad-address" name="sad-address" placeholder="Адрес детского сада"></textarea>
                    </div>
                    <div class="inp-wrap">
                        <input type="text" id="sad-tel" name="sad-tel" placeholder="Телефон" />
                    </div>
                    <div class="inp-wrap">
                        <textarea id="sad-regim" name="sad-regim" placeholder="Режим работы детского сада"></textarea>
                    </div>
                    <div class="inp-wrap">
                        <label id="label-lic">Главное фото</label>
                        <input type="file" name="uploader-main-photo" id="uploader-main-photo" placeholder="Главное фото детского сада">
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="dashed-place">
                <div class="title">Галерея</div>
                <div id="choice-photo">
                    <div class="inp-wrap">
                        <label id="label-lic">Добавить фото</label>
                        <button id="load-photo">Загрузить</button>
                        <input type="file" name="uploader-photo" id="uploader-photo" placeholder="Фото детского сада">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>