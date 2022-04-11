<?php
//$v = explode("/", $_SERVER['REQUEST_URI']);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?="/".explode("/", $_SERVER['REQUEST_URI'])[1] . "/css/style.css"?>">
</head>
<body>

<div class="menu">
    <ul>
        <li><a class="menu-caret" href="#">Уроки</a>
            <ul>
                <li><a href="https://gb.ru/lessons/212567">Урок 1</a></li>
                <li><a href="https://gb.ru/lessons/212568">Урок 2</a></li>
                <li><a href="#">Урок 3</a></li>
            </ul></li>
        <li><a class="menu-caret" href="#">Методички</a>
            <ul>
                <li><a href="https://gbcdn.mrgcdn.ru/uploads/asset/3839629/attachment/690132ae4439342c7992444e38415c9a.pdf">Методичка 1</a></li>
                <li><a href="#">Методичка 2</a></li>
                <li><a href="https://gbcdn.mrgcdn.ru/uploads/asset/3839666/attachment/ab281050c4566c798c8413ea38842a89.pdf">Методичка 3</a></li>
                <li><a href="#">Акция 4</a></li>
                <li><a href="#">Акция 5</a></li>
            </ul></li>
        <li><a class="menu-caret" href="https://localhost/gb_php_ls">Задачи</a>
            <ul>
                <li><a href="https://localhost/gb_php_ls/lessons/les1/">Задача 1</a></li>
                <li><a href="https://localhost/gb_php_ls/lessons/les2/">Задача 2</a></li>
                <li><a href="https://localhost/gb_php_ls/lessons/les3/">Задача 3</a></li>
            </ul></li>
    </ul>
</div>
