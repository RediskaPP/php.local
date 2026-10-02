<?php
function sum(array $numbers, callable $condition)
{
    $result = 0;
    foreach ($numbers as $number) {
        if($condition($number)) {
            $result = $result + $number;
        }
    }
    return $result;
}

$isPositive = function ($number) {
    return $number > 0;
};

$myNumbers = [0,1];
$positiveSum = sum($myNumbers, $isPositive);
echo $positiveSum;

class Person{
    public $name;
    public int $age;
}

function sum1(int|float $n1, int|float $n2) : int|float
{
    return $n1 + $n2;
}

$tom = new Person();
$tom->name = "tom";
$tom->age = 20;
echo $tom->age;
$tom->age = "21";
echo $tom->age;
