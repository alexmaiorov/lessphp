<?php
    // №1
    // $a = -5;
	// $b = 3;
	// if ($a >=0 && $b >= 0) {
    //     echo 'Разность чисел равна: '.($a - $b);
	// } elseif ($a < 0 && $b < 0) {
    //     echo 'Произведение чисел равно: '.($a * $b);
	// } elseif (($a >= 0 && $b < 0) || ($a < 0 && $b >= 0)) {
    //     echo 'Сумма чисел равна: '.($a + $b);
    // }

    // №2
    // $a = 8;
	// switch ($a) {
    // case 1:
    //     echo "a++";
    // case 2:
    //     echo "a++";
    // case 3:
    //     echo "a++";
    // case 4:
    //     echo "a++";
    // case 5:
    //     echo "a++";
    // case 6:
    //     echo "a++";
    // case 7:
    //     echo "a++";
    // case 8:
    //     echo "a++";
    // case 9:
    //     echo "a++";
    // case 10:
    //     echo "a++";
    // case 11:
    //     echo "a++";
    // case 12:
    //     echo "a++";
    // case 13:
    //     echo "a++";
    // case 14:
    //     echo "a++";
    // case 15:
    //     echo "a++";
	// 	break;
    // }
    
    
    // №3
    // function sum($arg1, $arg2) {
    //     return $arg1 + $arg2;
    // }
    
    // function subtraction($arg1, $arg2) {
    //     return $arg1 - $arg2;
    // }
    
    // function multiply($arg1, $arg2) {
    //     return $arg1 * $arg2;
    // }

    // function divide($arg1, $arg2) {
    //     return ($arg2 === 0) ? "не дели на ноль" : $arg1 / $arg2;
    // }
    // echo divide(4, 2);\


    // №4
// function mathOperation($arg1, $arg2, $operation) {
// switch ($operation) {
//     case "sum": 
//         return $arg1 + $arg2;
//     case "subtraction":
//         return $arg1 - $arg2;
//     case "multiply":
//         return $arg1 * $arg2; 
//     case "divide":
//         if ($arg2 === 0) {
//             echo "дели в уме";
//             break;
//         }
//         return $arg1 / $arg2;
//     }
// }
// echo mathOperation(6, -3, "divide");


// №5
// echo date('Y');


// №6
// function power($val, $pow) {
//     if ($pow === 0) {
//         return 1;
//     } elseif ($pow === 1) {
//         return $val;
//     } elseif ($pow > 1) {
//         return $val*power($val, $pow-1);
//     } else {
//         return 1/($val*power($val, $pow+1));
//     }
// }
// echo power(2, -1);

// №7
// $ho = '';
// function sukaTime($hours) {
//     if ($hours === 1 || $hours === 21) {
//         $ho = 'час';
//     } elseif ($hours > 1 && $hours < 5 || $hours > 21) {
//         $ho = 'часа';
//     } elseif ($hours > 4) {
//         $ho = 'часов';
//     }
// }
// echo sukaTime(22);

// №8
// $a = 0;
// while ($a++ < 100) {
//     if ($a % 3 == 0) {
//         echo $a, '<br/>';
//     }
// }

// №9
// $a = 0;
// do {
//     if (a === 0){
//         echo $a, '- это ноль';
//     } else if (a % 2 ===0){
//         echo $a, '- это четное число';
//     } else {
//         echo $a, '- это нечетное число';
//     }
//     $a++;
// } while ($a < 10);

// №10
// $regionArray = [
//     'moscowRegion' => ['Moscow ', 'Zelenograd ', 'Klin '],
//     'leningradRegion' => ['SPb ', 'Vsevolozhsk ', 'Pavlovsk '],
//     'smolenskRegion' => ['Smolensk ', 'Velizh ', 'Viyzma '],
//     'pskovRegion' => ['Pskov ', 'Velikie Luki ', 'Nevel ']
// ];

// foreach ($regionArray as $key => $region_value) {
//     echo "$key: <br/>";
//   foreach ($region_value as $city_value) {
//      echo "$city_value, ";
//   }
//   echo '<br/>';
// }

// №11
// function translit($str){
// 	$aLetters = array(
// 		"а" => "a", 
// 		"б" => "b", 
// 		"в" => "v", 
// 		"г" => "g", 
// 		"д" => "d", 
// 		"е" => "e", 
// 		"ё" => "yo",
// 		"ж" => "zh", 
// 		"з" => "z", 
// 		"и" => "i", 
// 		"й" => "y", 
// 		"к" => "k", 
// 		"л" => "l", 
// 		"м" => "m",
// 		"н" => "n", 
// 		"о" => "o", 
// 		"п" => "p", 
// 		"р" => "r", 
// 		"с" => "s", 
// 		"т" => "t", 
// 		"у" => "u",
// 		"ф" => "f", 
// 		"х" => "h", 
// 		"ц" => "ts", 
// 		"ч" => "ch", 
// 		"ш" => "sh", 
// 		"щ" => "s'h", 
// 		"ъ" => "",
// 		"ы" => "i", 
// 		"ь" => "'", 
// 		"э" => "e", 
// 		"ю" => "yu", 
// 		"я" => "ya"
//     );
//     $str = strtr($str, $aLetters);
//     return $str;
// };
// echo translit('Раз два');

// №12
// function replace($str) {
// 	echo str_replace(" ", "_", $str);
// };
// replace("Privet kak dela");

// №13


// №14
// for ($n = 0; $n < 10; print $n++) {}


// №15
// $regionArray = [
//     'moscowRegion' => ['Moscow ', 'Zelenograd ', 'Klin '],
//     'leningradRegion' => ['SPb ', 'Vsevolozhsk ', 'Pavlovsk '],
//     'smolenskRegion' => ['Smolensk ', 'Velizh ', 'Viyzma '],
//     'pskovRegion' => ['Pskov ', 'Velikie Luki ', 'Nevel ']
// ];

// foreach ($regionArray as $key => $region_value) {
//     echo "$key: <br/>";
//   foreach ($region_value as $city_value) {
//     if ($city_value[0] == "K")
//     echo "$city_value, ";
//     else
//     echo "1<br/>";
//   }
//   echo '<br/>';
// }


// №16
// function replace($a) {
// 	echo str_replace(" ", "_", $a);
// };

function translit($str){
	$aLetters = array(
		"а" => "a", 
		"б" => "b", 
		"в" => "v", 
		"г" => "g", 
		"д" => "d", 
		"е" => "e", 
		"ё" => "yo",
		"ж" => "zh", 
		"з" => "z", 
		"и" => "i", 
		"й" => "y", 
		"к" => "k", 
		"л" => "l", 
		"м" => "m",
		"н" => "n", 
		"о" => "o", 
		"п" => "p", 
		"р" => "r", 
		"с" => "s", 
		"т" => "t", 
		"у" => "u",
		"ф" => "f", 
		"х" => "h", 
		"ц" => "ts", 
		"ч" => "ch", 
		"ш" => "sh", 
		"щ" => "s'h", 
		"ъ" => "",
		"ы" => "i", 
		"ь" => "'", 
		"э" => "e", 
		"ю" => "yu", 
		"я" => "ya"
    );
    $str = strtr($str, $aLetters);
    $str = str_replace(" ", "_", $str);
    return $str;
};
// $a = translit('Раз два три четыре');
echo translit('Раз два три четыре');


?>