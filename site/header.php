<?php
//подгрузка данных
require_once "funForIndex.php";
$siteInfo = run();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Название документа</title>
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

<div class="menu">
    <ul>
        <li><a href="#">Главная</a></li>
        <li><a href="#">О компании</a></li>
        <li><a href="#">Покупателям</a></li>
        <li>
            <a class="menu-caret" href="#">Акции</a>
            <ul>
                <li><a href="#">Акция 1</a></li>
                <li><a href="#">Акция 2</a></li>
                <li><a href="#">Акция 3</a></li>
                <li><a href="#">Акция 4</a></li>
                <li><a href="#">Акция 5</a></li>
            </ul>
        </li>
        <li><a href="#">Новости</a></li>
        <li><a href="#">Контакты</a></li>
    </ul>
</div>
