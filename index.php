<?php
require_once "funForIndex.php";
$siteInfo = run();
?>
<head>
    <title><?= $siteInfo['title'] ?></title>
</head>
<body>

<h1><?= $siteInfo['h1'] ?> </h1>

<p> <?= $siteInfo['time'] ?> </p>

<h3> Раздел почемучка </h3>
<div class = "content">
    <?php

    pochemuchka();

    ?>
</div>

</body>
