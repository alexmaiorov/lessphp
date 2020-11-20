<?php
//While
    // $i=1;
    // while($i < 10) {
    //     echo "Элемент №$i<br>";
    //     $i++;
    // }

    // $list = "<ul>";
    // $j = 1;
    // while ($j < 10) {
    //     $list .= "<li>Элемент №$j</li>";
    //     $j++;
    // }
    // $list .= "</ul>";
    // echo $list;
//=======================================================================
    // $table = "<table border='1' whidth=800>";
    // $tr= 1;
    // while($tr<=50){
    //     if($tr == 4){
    //         break;
    //     }
    //     $table .= "<tr>";
    //     $td = 1;
    //     while($td <= 10) {
    //         if($td == 5 || $td == 8) {
    //             $td++;
    //             continue;
    //         }
    //         $x = $tr * $td;
    //         $table .= "<td>$x</td>";
    //         $td++;
    //     }
    //     $table .= "</tr>";
    //     $tr++;
    // }
    // $table .= "</table>";
    // echo $table;
//=======================================================
//For

// function deposit($money, $srok){
//     $stavka = $srok > 3 ? 9 : 8;
//     for($i=1; $i<$srok; $i++){
//         $moneyPY = $money * $stavka /100;
//         $money += $moneyPY;
//         echo "За $i год ваша сумма составляет $money (прибыль = $moneyPY)<br>";
//     }
// }

// $money = ($_GET['money']) ? $_GET['money'] : rand(1000, 1000000);
// $srok = ($_GET['srok']) ? $_GET['srok'] : rand(1, 8);
// deposit($money, $srok);
?>