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
                <li><a href="https://gb.ru/lessons/212569">Урок 3</a></li>
                <li><a href="https://gb.ru/lessons/212570">Урок 4</a></li>
                <li><a href="https://gb.ru/lessons/212571">Урок 5</a></li>
                <li><a href="https://gb.ru/lessons/212572">Урок 6</a></li>
                <li><a href="https://gb.ru/lessons/212573">Урок 7</a></li>
            </ul></li>
        <li><a class="menu-caret" href="#">Методички</a>
            <ul>
                <li><a href="https://gbcdn.mrgcdn.ru/uploads/asset/3839629/attachment/690132ae4439342c7992444e38415c9a.pdf">Методичка 1</a></li>
                <li><a href="https://gbcdn.mrgcdn.ru/uploads/asset/3839662/attachment/c2aa115dc92af83c15d86950b91e614d.pdf">Методичка 2</a></li>
                <li><a href="https://gbcdn.mrgcdn.ru/uploads/asset/3839666/attachment/ab281050c4566c798c8413ea38842a89.pdf">Методичка 3</a></li>
                <li><a href="https://gbcdn.mrgcdn.ru/uploads/asset/3839669/attachment/ae97193b20ce67eb80340c7d89c51a7e.pdf">Методичка 4</a></li>
                <li><a href="https://gbcdn.mrgcdn.ru/uploads/asset/3839675/attachment/ec44ff63328a6b62b248ac709e383e3a.pdf">Методичка 5</a></li>
                <li><a href="https://gbcdn.mrgcdn.ru/uploads/asset/3839681/attachment/7a834042afd9d39eb467df38492e94c1.pdf">Методичка 6</a></li>
                <li><a href="https://gbcdn.mrgcdn.ru/uploads/asset/3839687/attachment/67882de92ebd16014a5e156c285bbf1b.pdf">Методичка 7</a></li>
            </ul></li>
        <li><a class="menu-caret" href="https://localhost/gb_php_ls">Задачи</a>
            <ul>
                <li><a href="https://localhost/gb_php_ls/lessons/les1/">Задача 1</a></li>
                <li><a href="https://localhost/gb_php_ls/lessons/les2/">Задача 2</a></li>
                <li><a href="https://localhost/gb_php_ls/lessons/les3/">Задача 3</a></li>
            </ul></li>
    </ul>
</div>
