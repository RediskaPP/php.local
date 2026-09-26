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

// Генератор предоставляет функцию, которая генерирует набор значений
/*
Для возвращения значения из функции применяется оператор yield. Но в отличие от return оператор yield
сохраняет состояние функции, позволяя ей продолжать работу с того места, когда остановилось ее выполнение.
*/
function generator()
{
    yield 21;
}
foreach (generator() as $number)
{
    echo $number;
}

function generateNumbers()
{
    for($i = 10; $i <= 15; $i++) {
        yield $i;
    }
}
echo "<br>";
foreach(generateNumbers() as $number)
{
    echo $number;
}
echo "<br>";
foreach(generateNumbers() as $index => $number)
{
    echo "$index - $number<br/>";
}

// from - с помощью данного оператора можно определять массив - источник данных для генератора
function generateNumbers1()
{
    yield 1;
    yield from [2, 3, 4];
    yield 5;
}
echo "<br>";
foreach (generateNumbers1() as $number)
{
    echo $number;
}
// настройка поведения генератора
function generateNumbers2($start, $end)
{
    for($i = $start; $i < $end; $i++) {
        yield $i;
    }
}
foreach (generateNumbers2(4, 9) as $number)
{
    echo "<br>";
    echo $number;
}

?>

</body>
</html>