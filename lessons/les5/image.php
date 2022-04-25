
<?php
require "../../config/DB.php";

use config\DB;


$db = new DB();
$db->connect();



//print_r($_COOKIE['idImage']);

$imageId = $_COOKIE['idImage'];
$sql = 'select * from img where id like '.$imageId;
//print_r($sql);
$sqlSelect = $db->query($sql);

//print_r($sqlSelect) ;

$file = $sqlSelect[0];

$dirFile = $file['path'] .'/'. $file['name'];

    $sql1 = "UPDATE `img` SET `popul` = '".($file['popul']+1) ."' WHERE `img`.`id` = ".$imageId;
//print_r($sql);
    $sqlSelect1 = $db->query($sql1);
?>


<div id="bblock">
    <a href="image.php" value = "<?=$file['id']?>"><img src="<?= $dirFile ?>" style="height: 150px; width: 150px;" onclick="document.cookie = 'idImage=' + <?=$file['id']?>;"></a>
    <p><?="Популярность: ".$file['popul']?></p>


</div>

