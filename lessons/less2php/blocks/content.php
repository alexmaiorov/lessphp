<?php
    $path = "files/test.txt";
    // $path = $_SERVER['DOCUMENT_ROOT']."/files/test.html";

    // $file = fopen($path, "r");
    // while(!feof($file)) {
    //     echo fgets($file)."<br>";
    // }

    // print_r($_SERVER);
    echo file_get_contents($path);
?>