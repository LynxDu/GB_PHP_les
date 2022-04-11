
<?php
require "../../header.php";
require_once "les2.php";
use lessons\les2\les2;
?>
<h3> Раздел почемучка </h3>
<?php
$lesson = new les2();
$lesson->pochemuchka();
?>

