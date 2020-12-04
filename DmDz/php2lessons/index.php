<?php
// $i=0;
// while ($i<100){
//     if (!($i%3)){
//         echo $i."<br>";
//     }
//     $i++;
// }
//---------------------------------------------------------------------------------------------------
// $j=0;
// do {
//     if ($j==0){
//         echo "$j - ноль","<br>";
//         $j++;
//     } else if (!($j%2)) {
//         echo "$j - чётное число","<br>";
//         $j++;
//     }
//     else {
//         echo "$j - нечётное число","<br>";
//         $j++;
//     }     
// } while ($j<=10);

//------------------------------------------------------------------------------------------------
$m="Московская область";
$l="Ленинградская область";
$r="Рязанская область";
$array = array ("$m"=>array("Москва", "Зеленоград", "Клин"),
                "$l"=>array("Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"),   
                "$r"=>array("Рязань","Скопин","Сасово"));            
foreach ($array as $key=>$arr){
    echo $key,":","<br>";
    foreach ($arr as $ar){
    if (preg_match("/К/i",$ar)){
        echo "|$ar|"."<br>";
    }
}
  
    
}
//--------------------------------------------------------------------------------------------------




$text="нужно провести транслитерацию текста с заменой всех букв";

function str_split_unicode($str, $length = 1) {
    $tmp = preg_split('~~u', $str, -1, PREG_SPLIT_NO_EMPTY);
    if ($length > 1) {
        $chunks = array_chunk($tmp, $length);
        foreach ($chunks as $i => $chunk) {
            $chunks[$i] = join('', (array) $chunk);
        }
        $tmp = $chunks;
    }
    return $tmp;
}

function trans($textprim){
    $translit = array ("а"=>"a",
                    "б"=>"b",
                    "в"=>"v",
                    "г"=>"g",
                    "д"=>"d",
                    "е"=>"e",
                    "ё"=>"jo",
                    "ж"=>"zh",
                    "з"=>"z",
                    "и"=>"i",
                    "й"=>"jj",
                    "к"=>"k",
                    "л"=>"l",
                    "м"=>"m",
                    "н"=>"n",
                    "о"=>"o",
                    "п"=>"p",
                    "р"=>"r",
                    "с"=>"s",
                    "т"=>"t",
                    "у"=>"u",
                    "ф"=>"f",
                    "х"=>"kh",
                    "ц"=>"ts",
                    "ч"=>"ch",
                    "ш"=>"sh",
                    "щ"=>"shch",
                    "ъ"=>"''",
                    "ы"=>"y",
                    "ь"=>"'",
                    "э"=>"e",
                    "ю"=>"yu",
                    "я"=>"ya",
                    " "=>"_"
);
    $pieces = str_split_unicode($textprim);
    echo $textprim;
    
    foreach ($pieces as $piec){
        if (array_key_exists($piec, $translit)){
            $piec=$translit[$piec];
        }
        print_r ($piec);

        }
}
trans($text);
//-------------------------------------------------------------------------------------------------
// for ($n = 0; $n < 10; print $n++) {}
//-------------------------------------------------------------------------------------------------
echo "<br>";
$dir = 'img/';
$images = scandir($dir);
for ($i = 0; $i < count($images); $i++) {
  if ($i>1) {
    echo '<a href="' . $dir . $images[$i] . '" target="_blank"><img src=' . $dir . $images[$i] . ' style="width: 200px;"></a>';
  }
}

?>