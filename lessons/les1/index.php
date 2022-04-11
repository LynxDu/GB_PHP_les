
<?php
require "../../header.php";
require_once "les1.php";
use lessons\les1\les1;
?>
<h3> Раздел почемучка </h3>
<?php
$lesson = new les1();
$lesson->pochemuchka();
?>

