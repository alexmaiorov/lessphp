<?php
$a=10;
$b=5;
list($a,$b)=[$b,$a];
echo $a,' ',$b;
if ($a>0 and $b>0){
    echo $a-$b;
}
else if($a<0 && $b<0){
    echo $a*$b;
}
else echo $a+$b;

$c=rand(0,15);
switch ($c) {
    case 0:
        echo $c++;
    case 1:
        echo $c++;
    case 2:
        echo $c++;
    case 3:
        echo $c++;
    case 4:
        echo $c++; 
    case 5:
        echo $c++;   
    case 6:
        echo $c++; 
    case 7:
        echo $c++;  
    case 8:
        echo $c++;  
    case 9:
        echo $c++;  
    case 10:
        echo $c++;  
    case 11:
        echo $c++;  
    case 12:
        echo $c++;  
    case 13:
        echo $c++; 
    case 14:
        echo $c++;  
    case 15:
        echo $c++;  
    break;
    default: 
    echo('wrong number');  
}

function sum($a,$b){
    return $a+$b;
}
function sub($a,$b){
    return $a-$b;
}
function mul($a,$b){
    return $a*$b;
}
function div($a,$b){
    if ($b==0) {return ('error');
    } else {
        return ($a/$b);
    }
}

echo(sum(10,5));
echo(sub(10,5));
echo(mul(10,5));
echo(div(10,5));

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation){
    case sum:
        return (sum($arg1,$arg2)); 
    break;  
    case sub:
        return (sub($arg1,$arg2));
    break;  
    case mul:
        return (mul($arg1,$arg2)); 
    break;  
    case div:
        return (div($arg1,$arg2)); 
    break; 
    }
}
echo(mathOperation(10,10,mul));

function power($val, $pow)
{
    if($pow !== 0) {
        return $val * power($val, --$pow);
    } 

    return 1;
}
echo(power(2,3));

$l=date(H);
$u=date(i);
function hmh($l) {
    if ($l==1||$l==21) {
        return $h="час";
    } else if ($l==2||$l==3||$l==4||$l==22||$l==23) {
        return $h="часа";
    } else {
        return $h="часов";
    }
}
function hmm($u) {
    if ($u==1||$u==21||$u==31||$u==41||$u==51) {
        return $m="минута";
    } else if ($u==2||$u==3||$u==4||$u==22||$u==23||$u==24||$u==32||$u==33||$u==34||$u==42||$u==43||$u==44||$u==52||$u==53||$u==54) {
        return $m="минуты";
    } else {
        return $m="минут";
    }
}
echo $l.hmh($l).$u.hmm($u)
?>