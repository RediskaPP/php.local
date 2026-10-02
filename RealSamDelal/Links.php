<?php
$num1 = 1;
$num2 = &$num1;
$num1 = 2;

echo $num2;

$num1++;
$num2++;

echo "$num1<br>";
echo "$num2<br>";

$arr1 = [1, 2, 3, 4, 5];
$arr2 = &$arr1;
$arr2[0] = '!';

var_dump($arr1);

$arr1[0]++;
$arr2[0]++;

echo "$arr1[0]<br>";
echo "$arr2[0]<br>";

$arr = [1, 2, 3, 4, 5];

foreach ($arr as &$elem) {
    $elem++;
}

var_dump($arr);