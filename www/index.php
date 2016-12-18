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
    <div class="row top-place"></div>
    <div class="row main-place">
        <form id="main-form">
            <div class="form-wrap">
                <select id="user-type">
                    <option>Детский сад</option>
                    <option>Родитель</option>
                </select>
            </div>
            <div class="form-wrap">
                <input type="text" id="login" name="login" placeholder="Логин" />
            </div>
            <div class="form-wrap">
                <input type="password" id="pass" name="pass" placeholder="Пароль" />
            </div>
            <div class="form-wrap">
                <a href="#" id="registration">Регистрация</a>
                <button type="submit" id="enter">Войти</button>
            </div>
        </form>
    </div>
    <div class="row">
        <div class="main-title">Какие возможности предоставляет сервис</div>
        <div class="title">Для родителей</div>
        <div class="row">
            <div class="col-md-4 info-block">
                <img src="frontend/img/info.png" />
                <div class="block-text">Просматривать информацию о множестве детских садов в одном месте</div>
            </div>
            <div class="col-md-4 info-block">
                <img src="frontend/img/zayavka.png" />
                <div class="block-text">Подать заявку в детский сад онлайн</div>
            </div>
            <div class="col-md-4 info-block">
                <img src="frontend/img/docs.png" />
                <div class="block-text">Прикреплять все необходимые документы в электронном виде</div>
            </div>
        </div>
        <div class="title">Для детских садов</div>
        <div class="row">
            <div class="col-md-4 info-block">
                <img src="frontend/img/info_rod.png" />
                <div class="block-text">Предоставить информацию о себе большему количеству родителей</div>
            </div>
            <div class="col-md-4 info-block">
                <img src="frontend/img/place.png" />
                <div class="block-text">Опреративно менять информацию о количестве свободных мест</div>
            </div>
            <div class="col-md-4 info-block">
                <img src="frontend/img/online.png" />
                <div class="block-text">Рассматривать заявки на поступление он-лайн</div>
            </div>
        </div>
    </div>
    <div class="row top-place"></div>
</div>
</body>
</html>