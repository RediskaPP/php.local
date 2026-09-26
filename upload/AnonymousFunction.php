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
$hello = function($name)
{
    echo "<h2>Hello " . $name . "</h2>";
};
$hello("Tom");
$hello("Bob");

// Анонимные функции могут возвращать некоторое значение
$sum = function($a, $b)
{
    return $a + $b;
};
$number = $sum(5, 11);
echo $number;

// callback-функция
function welcome($message)
{
    $message();
}
welcome(function()
{
    echo "<br>Hello!";
});

// передача одной функции в различные анонимные функции
function welcome1($message)
{
    $message();
}
$goodMorning = function() { echo "<h3>Доброе утро</h3>"; };
$goodEvening = function() { echo "<h3>Добрый вечер</h3>"; };
$goodNight = function() { echo "<h3>Доброй ночи</h3>"; };
welcome1($goodMorning);
welcome1($goodEvening);
welcome1($goodNight);
welcome1(function() {echo "<h3>Привет</h3>"; });

// сумма элементов массива
function sum($numbers, $condition)
{
    $result = 0;
    foreach($numbers as $number) {
        if($condition($number))
        {
            $result += $number;
        }
    }
    return $result;
}

// для четных чисел
$isEvenNumber = function($n) { return $n % 2 === 0; };
// для положительных чисел
$isPositiveNumber = function($n) { return $n > 0;};

$myNumbers = [-2, -1, 0, 1, 2, 3, 4, 5];
$positiveSum = sum($myNumbers, $isPositiveNumber);
$evenSum = sum($myNumbers, $isEvenNumber);
echo "Сумма положительных чисел: $positiveSum <br/> Сумма четных чисел: $evenSum";


?>

</body>
</html>