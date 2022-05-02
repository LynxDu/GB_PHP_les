<?php
require "../../../header.php";
require "../../../config/DB.php";

use config\DB;


$db = new DB();
$db->connect();
/*
 [0] => Array
        (
            [id] => 10
            [path] => ../les4/img
            [size] => 792127
            [height] => 1080
            [width] => 1920
            [name] => 1.jpg
            [popul] => 0
            [ins] => 1
        )
*/
?>
<style>
    #bblock {
        float: left; /*Задаем обтекание*/
        width: 200px;
        height: 250px;
    }


</style>
<script>
    document.cookie = "idImage=" + <?=5?>; // обновляем только куки с именем 'user'
    //alert(document.cookie); // показываем все куки
</script>


<br>
<br>
<br>
<div align="center">
    <form action="product.php" method="get">
        <?php
        $sqlSelect = $db->query('select * from product');

        foreach ($sqlSelect as $key => $file){
            ?>
            <div id="bblock">
                <?php $path = 'image/'.$file['image']; ?>
                <a href="product.php" onclick="document.cookie = 'idImage=' + <?=$file['id']?>;"><?php if(empty($file['image'])){echo 'Нет картинки';}else{?>
                    <img src="<?= $path ?>" style="height: 150px; width: 150px;" > <?php }?>
                <p></p><?=$file['product']?></p></a>
                <p><?="цена: ".$file['count']?></p>


            </div>


            <?php


        }


        ?>
    </form>
</div>
