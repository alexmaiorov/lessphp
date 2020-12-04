<?php
    session_start();
    if($_GET['success'] && $_SESSION['login']):?>
        <h1>Welcome, auth successfull</h1>
    <?php endif;
?>

<form action="server.php" method="post">
    <label>
        insert login
        <input type="text" name="login" value="<?=$_SESSION['login']?>">
    </label>
    <label>
        insert password
        <input type="password" name="pass" value="<?=$_SESSION['pass']?>">
    </label>
    <input type="submit">
</form>