<?php
session_start();

require "../../header.php";




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
    <form action="image.php" method="get">
    <?php
    $sqlSelect = $db->query('select * from img');

    foreach ($sqlSelect as $key => $file){
        $dirFile = $file['path'] .'/'. $file['name'];
        ?>
            <div id="bblock">
                <a href="image.php" value = "<?=$file['id']?>"><img src="<?= $dirFile ?>" style="height: 150px; width: 150px;" onclick="document.cookie = 'idImage=' + <?=$file['id']?>;"></a>
                <p><?="Популярность: ".$file['popul']?></p>


            </div>


            <?php


    }


    ?>
    </form>
</div>





