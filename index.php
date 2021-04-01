<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8"
     <meta name = "viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>PHP веб сайт </title>
</head>
<body>
<div class="main">
    <div class="box1"></div>
    <div class="box2"></div>
    <div class="dot"></div>
</div>
<div class="d-flex flex-column flex-md-row align-items-center p-3
px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font weight-normal"> Odi CITY</h5>
    <nav  class="my-2 my-md-0 mr-md-3">
        <a class = "p-2 text-dark" href="#"> Главная</a>
        <a class = "p-2 text-dark" href="#"> Контакты</a>
    </nav>
    <a class="btn btn-outline-primary" href="#">Войти</a>
</div>
<div class="container ">
    <h3 class = "mb-5"> Наши статьи</h3>
    <div class="d-flex flex-wrap">
    <?php
    for($i = 0; $i < 5; $i++):
    ?>

        <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Хит продаж</h4>
            </div>
            <div class="card-body">
                <img src="img/<?php echo ($i+1)?>.png" class="img-thumbnail">
                <ul class = "list-unstyled mt-3 mb-4">
                    <li>1000 + покупателей по всему городу</li>
                    <li>30 различных вкусов</li>
                    <li>Доставка до двери</li>
                    <li>Возврат в случае брака</li>
                </ul>
                <button type="button" class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
            </div>
        </div>

    <?php
    endfor;
    ?>
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