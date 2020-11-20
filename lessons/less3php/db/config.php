<?php
const SERVER = "localhost";
const DB = "less3_shop";
const LOGIN = "root";
const PASS = "";

$connect = mysqli_connect(SERVER, LOGIN, PASS, DB) or
    die("Ошбка соединения с базой");
?>