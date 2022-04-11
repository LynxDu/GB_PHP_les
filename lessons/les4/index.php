<?php
require "../../header.php";
?>

<br>
<br>
<br>
<div align="center">
<?php
$dir = "img";
$files = scandir($dir);
foreach ($files as $key => $file){
    $dirFile = $dir . "\\" . $file;
    if (is_file($dirFile)){

        ?>
        <a href="<?=$dirFile?>"><img src="<?= $dirFile ?>" style="height: 150px; width: 150px;"></a>
        <?php
    }

}
?>
</div>


