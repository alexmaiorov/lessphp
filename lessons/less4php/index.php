<?php
if (isset($_GET['error'])){
    echo "access denied";
}
    $x = rand(1,10);
    $y = rand(1,10);
    $z = $x * $y;
?>

<form action="server.php" method ="POST" enctype="multipart/form-data">
    <p>insert files</p>
    <input type="file" name="photo[]" multiple accept="image/jpeg">
    <input type="hidden" name="correct" value="<?=$z?>">
    <label>
        add fio
        <input type="text" name="fio">
    </label>

    <label>
        Какие языки вы знаете
        <input type="checkbox" name="lang[]" value="PHP">PHP
        <input type="checkbox" name="lang[]" value="JS">JS
        <input type="checkbox" name="lang[]" value="C++">C++
    </label>

    <label>
        ваш город
        <input type="radio" name="city" value="Москва">Москва
        <input type="radio" name="city" value="Санкт-Петербург">Санкт-Петербург
        <input type="radio" name="city" value="Ебург">Ебург
    </label>

    <p>input <?="$x * $y"?></p>
    <input type="text" name="user">
    <input type="submit">
</form>