<?php
use site\lessons\les1\les2;
?>
<h1><?= $siteInfo['h1'] ?> </h1>

<p> <?= $siteInfo['time'] ?> </p>

<h3> Раздел почемучка </h3>

<?php

$lesson = new les2();

$lesson->pochemuchka();

?>
