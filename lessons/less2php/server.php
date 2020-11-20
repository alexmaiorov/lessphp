<?php

// print_r($_FILES);

$path = "files/".$_FILES['photo']['name'];
if (move_uploaded_file($_FILES['photo']['tmp_name'], $path)){
    echo "file succesfully saved";
}
?>