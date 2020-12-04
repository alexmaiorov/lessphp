<?php
$connect = mysqli_connect("localhost", "root", "", "shop");

$login = ($_POST['login']) ? strip_tags($_POST['login']) : "";
$pass = ($_POST['pass']) ? strip_tags($_POST['pass']) : "";

$sql = "select * from users where login = '$login' and pass = '$pass'";
$res = mysqli_query($connect, $sql) or die("Error: ".mysqli_error($connect));

if (mysqli_num_rows($res) > 0) {
    setcookie("login", $login);
    setcookie("pass", $pass);
    header("Location: index.php?success=true");
}
else {
    die ("Error authorisation");
}
?>