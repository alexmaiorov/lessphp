<?php
    $svetofor = ["red", "yellow", "green"];
    // $color = $svetofor[rand(0,2)];
    $color = $_GET['color'];
    echo $color;
    switch($color) {
        case "red":
            echo "stop";
        break;
        case "yellow":
            echo "ready";
        break;
        case "green":
            echo "go";
        break;
    }
?>