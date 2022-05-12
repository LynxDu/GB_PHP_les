
<?php
require "../../../header.php";
//require "../../../config/DB.php";

//use config\DB;


//$db = new DB();
//$db->connect();



//print_r($_COOKIE['idImage']);

$imageId = $_COOKIE['idImage'];
$sql = 'select * from product where id like '.$imageId;
//print_r($sql);
$sqlSelect = $db->query($sql);

//print_r($sqlSelect) ;

$file = $sqlSelect[0];


$path = 'image/'.$file['image'];
?>
<style>
    #bblock {
        margin-left: 100px;
        margin-top: 100px;
        float: left; /*Задаем обтекание*/
        width: 200px;
        height: 250px;
    }


</style>
<br>
<div id="bblock">
    <?php if(empty($file['image'])){echo 'Нет картинки';}else{?>
    <img src="<?= $path ?>" style="height: 150px; width: 150px;" > <?php }?>
    <p>Описание: <?= $file['coment'] ?></p>
    <p><?="цена: ".$file['count']?></p>
   <button onclick="">В корзину</button>


</div>

