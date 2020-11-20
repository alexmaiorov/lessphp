<?php
$arr = scandir("img");
for ($i=0; $i < count($arr); $i++) {
    if ($i > 1):?>
        <img src="img/<?=$arr[$i]?>" alt="img">
        <?php
            endif;
}
?>