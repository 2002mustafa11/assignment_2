<?php
$n1=4;
$n2=5;
$n3=6;
echo ($n1+$n2)*$n3;
echo '<hr>';

define('LENGTH',5);
define('WIDTH',10);
$height=7;
$size=LENGTH*WIDTH*$height;
echo $size,'<hr>';

$hour=1;
echo $Seconds= $hour*60*60,'<hr>';

echo $area=(0.5*$b=10)*$h=15,'<hr>';

define('DAYS',365);
$age=20;
echo $age_days=$age*DAYS,'<hr>';

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
echo chunk_split('ErraSoft',2,'/'),'<hr>';

$n=5;
if($n%2==0){
    echo 'even';
}else echo 'odd no';
echo '<br>';
$n_0='4';
if((int)$n_0%2==0){
    echo 'even';
}else echo 'odd no';
echo'<hr>';
$description = "no pain";
if($description=="no pain")
{
    echo 'success word';
}elseif($description=="no gain") {
    echo 'success word';
} else {
    echo 'wrong word';
}
echo'<hr>';
$pool=0;
// if ($pool==0) {
//     echo 1;
// }elseif($pool==1){echo 0;}
switch ($pool) {
    case 1:
        echo 0;
        break;
    
    case 0:
        echo 1;
        break;
}
echo'<hr>';
$word='s';
if ($word[-1]=='s') {
    echo 'Plural';
} else {
    echo'Singular';
}

echo'<hr><br>';

$num1 = 5;
$num2 = 10;
$operation = '+';
if ($operation == '+') {
    $result = $num1 + $num2;
} elseif ($operation == '-') {
    $result = $num1 - $num2;
} elseif ($operation == '*') {
    $result = $num1 * $num2;
} elseif ($operation == '/') {
    if ($num2 == 0) {
        echo "Error: zero";
    }else{
        $result = $num1 / $num2;
    }
} elseif ($operation == '**') {
        $result = $num1 ** $num2;
}elseif ($operation == '%') {
    $result = $num1 % $num2;
}
if ($result != null) {
    echo "<p>Result: $result</p>";
}
