<?php
$n1=4;
$n2=5;
$n3=2;
echo ($n1+$n2)*$n3;
echo '<hr>';

function size_box($height){
define('LENGTH',5);
define('WIDTH',10);
$size=LENGTH*WIDTH*$height;
return $size;
}
echo size_box(7);
echo '<br>';
function HoursToSeconds($hour){
$hour = (is_int($hour)) ? $hour : 1 ;
echo $Seconds= $hour*60*60;
}
HoursToSeconds(5);
echo '<br>';
function Area_Triangle($b,$h){
echo $area=(0.5*$b)*$h;
}
Area_Triangle(10,15);
echo '<br>';
function age_days($age=20){
define('DAYS',365);
echo $age*DAYS,'<hr>';
}
age_days();
echo '<br>';
$str='EraaSoft Learn by practice';
echo strlen($str),'<br>';
echo strlen(str_replace(' ','',$str)),'<br>';
echo str_word_count($str),'<br>';
echo strpos($str,'by'),'<br>';
echo substr($str, 0, 8),'<br>';
echo str_replace('by','',$str),'<br>',$str,'<hr>';

$string_one = "Eraa";
$string_two = "Soft";
$full_string=$string_one.$string_two;
echo strcmp($full_string,'EraaSoft'),'<br>';

 $x=chunk_split('ErraSoft',2,'/');
echo rtrim($x,'/'),'<hr>';


function even_oddno($n=5){
if (is_int($n)) {
        if($n%2==0){
    echo 'even';
     }else echo 'odd no';
}

}
even_oddno();

function evenOddno($str){
if (is_string($str)) {
$n_0=strlen($str);
if((int)$n_0%2==0){
    echo 'even';
}else echo 'odd no';
}    
}
evenOddno('eraa');

echo '<br>';
function description($description){
if($description=="no pain")
{
    echo 'success word';
}elseif($description=="no gain") {
    echo 'success word';
} else {
    echo 'wrong word';
}

}
description("no pain");
echo '<br>';
function pool($pool){
// if ($pool==0) {
//     echo 1;
// }elseif($pool==1){echo 0;}
if ($pool=== 1 || 0) {
    switch ($pool) {
    case 1:
        echo 0;
        break;
    
    case 0:
        echo 1;
        break;
 }
}
}
pool(1);

echo '<br>';
function word($word){
if ($word[-1]=='s') {
    echo 'Plural';
} else {
    echo'Singular';
}
}
word('lls');
echo'<hr><br>';


function calculate($num1,$num2,$operation){
if ($operation == '+') {
    $result = $num1 + $num2;
} elseif ($operation == '-') {
    $result = $num1 - $num2;
} elseif ($operation == '*') {
    $result = $num1 * $num2;
} elseif ($operation == '/') {
    if ($num2 == 0) {
        echo "Error: zero";
    } else {
        $result = $num1 / $num2;
    }
}
elseif ($operation == '**') {
    $result = $num1 ** $num2;
}
elseif ($operation == '%') {
$result = $num1 % $num2;
}

if ($result != null) {
    echo "<p>Result: $result</p>";
}
} 
calculate(5,2,'**');


/*111111111111111111111111111111111*/

