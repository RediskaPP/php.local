<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
// стрелочные функции - fn(параметры) => действия;

$a = 8;
$b = 10;

$closure = fn($c) => $a + $b + $c;

$result = $closure(22);

function sum($numbers, $condition)
{
    $result = 0;
    foreach ($numbers as $number) {
        if($condition($number)) {
            $result += $number;
        }
    }
    return $result;
}

$myNumbers = [-2, -1, 0, 1, 2, 3, 4, 5];
$positiveSum = sum($myNumbers, fn($n)=>$n > 0);
$evenSum = sum($myNumbers, fn($n)=>$n % 2 === 0);
echo "<br>Сумма положительных чисел: $positiveSum<br/>Сумма четных чисел: $evenSum<br/>";
?>

</body>
</html>