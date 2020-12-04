<?php
    if($_GET['success'] && $_COOKIE['login']):?>
        <h1>Welcome, auth successfull</h1>
    <?php endif;
?>

<form action="server.php" method="post">
    <label>
        insert login
        <input type="text" name="login" value="<?=$_COOKIE['login']?>">
    </label>
    <label>
        insert password
        <input type="password" name="pass" value="<?=$_COOKIE['pass']?>">
    </label>
    <input type="submit">
</form>