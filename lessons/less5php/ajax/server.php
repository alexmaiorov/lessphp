<?php
session_start();

$connect = mysqli_connect("localhost", "root", "", "shop");

$login = ($_POST['login']) ? strip_tags($_POST['login']) : "";
$pass = ($_POST['pass']) ? strip_tags(md5($_POST['pass'])) : "";

$sql = "select * from users where login = '$login' and pass = '$pass'";
$res = mysqli_query($connect, $sql) or die("Error: ".mysqli_error($connect));

if (mysqli_num_rows($res) > 0) {
    $_SESSION["login"] = $login;
    $_SESSION["pass"] = $pass;
    echo "auth successfull";
}
else {
    echo "Error authorisation";
}
?>