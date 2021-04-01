<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8"
    <meta name = "viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>PHP веб сайт </title>
</head>
<body>
<div class="main">
    <div class="box1"></div>
    <div class="box2"></div>
    <div class="dot"></div>
</div>
<?php require "blocks/header.php" ?>
<div class="container ">
    <h3 class = "mb-5"> Наши статьи</h3>
    <div class="d-flex flex-wrap">
    </div>
</div>
<footer class="container pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
        <div class="col-12 col-md">
            <img class="mb-2" src="img/logo.jpg" alt="" width="44" height="39">
            <small class="d-block mb-3 text-muted">© 2020–2021</small>
        </div>
        <div class="col-6 col-md">
            <h5> Соц. сети </h5>
            <ul class="list-unstyled text-small">
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Вконтакте</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Инстаграмм</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Телеграмм</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Фейсбук</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Одноклассники</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Ютуб</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>Авторы</h5>
            <ul class="list-unstyled text-small">
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Саидов Амирджон</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Савельев Олег</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Фалилеев Сергей</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Блошкин Алексей</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>Компания</h5>
            <ul class="list-unstyled text-small">
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">О проекте</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Вакансии</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Безопасность</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Помощь</a></li>
            </ul>
        </div>
    </div>
</footer>
</body>
</html>