<?php
include "config.php";

$id = $_POST['id'];
$price = $_POST['price'];

$sql = "UPDATE `product` SET `price`= $price WHERE id=$id";

if (mysqli_query($connect, $sql)) {
    echo "data success uploaded";
}