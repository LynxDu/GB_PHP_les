<?php
//подгрузка данных
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Название документа</title>

</head>
<style>
    .menu {
        width: 100%;
        display: table;
    }
    .menu ul {
        display: table-row;
    }
    .menu li {
        display: table-cell;
        position: relative;
        background: #2767A0;
    }
    .menu li a {
        display: block;
        padding: 15px 15px;
        color: #fff;
        text-align: center;
    }
    .menu-caret:after {
        display: inline-block;
        width: 0;
        height: 0;
        margin-left: .255em;
        vertical-align: .255em;
        content: "";
        border-top: 3px solid;
        border-right: 3px solid transparent;
        border-bottom: 0;
        border-left: 3px solid transparent;
    }
    .menu ul li:hover, .menu a:hover {
        background: #666;
    }
    .menu li:hover ul  {
        display: block;
        position: absolute;
        top: 100%;
        left: 0px;
        background: #666;
        margin: 0;
        padding: 10px 20px;
        width: 150px;
        z-index: 9999;
    }
    .menu ul ul  {
        display: none;
    }
    .menu ul ul li  {
        display: block;
        background: #666;
        padding: 5px 0;
    }
    .menu ul ul li a  {
        display: block;
        padding: 0;
        background: #666;
        text-align: left;
    }
</style>
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
                <li><a href="#">Методичка 3</a></li>
                <li><a href="#">Акция 4</a></li>
                <li><a href="#">Акция 5</a></li>
            </ul></li>
        <li><a class="menu-caret" href="">Задачи</a>
            <ul>
                <li><a href="lessons/les1/index.php">Задача 1</a></li>
                <li><a href="lessons/les2/index.php">Акция 2</a></li>
                <li><a href="#">Акция 3</a></li>
                <li><a href="#">Акция 4</a></li>
                <li><a href="#">Акция 5</a></li>
            </ul></li>
    </ul>
</div>
