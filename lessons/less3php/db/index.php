<?php
include "config.php";
$sql = "SELECT * FROM `product`";

$res = mysqli_query($connect, $sql);

while($data = mysqli_fetch_assoc($res)) {
    echo $data['title']." ".$data['price']." ".$data['description']."<br>";
}

?>