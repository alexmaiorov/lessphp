<?php
    // $x = 10 + "12a";
    // $a = (int)"<script>alert()</script>";
    // $c = "qwerty";
    // $c .= $x;
    // $c .= "ytrewq";
    // echo "<h1> \$a = $a ООО \"Дима Ломтев\" </h1>";
    // echo "<hr> $c"

    // $day = 6;
    // if( $day > 1 && $day < 6) {
    //     echo "Сегодня будний день";
    // }
    // else{
    //     echo "holidays";
    // }
    // $day = date("w");
    // echo ($day > 1 && $day < 6) ? "Сегодня будний день" : "holidays";

?>
<?php
    // $day = date("w");

    // function myFunction($x) {
        
    //     if ($x % 2 === 0) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // };
    // $c = myFunction(3);
    // $b="";
    // if (!$b) {
    //     echo "false";
    // }

    function fakt($n) {
        if($n == 1 || $n == 0) {
            return 1;
        }
        else{
            return $n * fakt($n - 1);
        };
    }
    echo fakt(5);
?>
<a href="switch.php?color=red">Link</a>

<?php
    $a = 5;
    $b = '05';
    var_dump($a == $b);         // Почему true?
    var_dump((int)'012345');     // Почему 12345?
    var_dump((float)123.0 === (int)123.0); // Почему false?
    var_dump((int)0 === (int)'hello, world'); // Почему true?
?>