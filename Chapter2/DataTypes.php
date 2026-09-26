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
// Типы данных
// bool (логический тип)
// int (целые числа)
// float (дробные числа)
// string (строки)
// array (массивы)
// object (объекты)
// callable (функции)
// mixed (любой тип)
// resource (ресурсы)
// null (отсутствие значения)

// int
// Все числа в десятичной системе имеют значение 28
$num_10 = 28; // десятичное число
$num_2 = 0b11100; // двоичное число (28 в десятичной)
$num_8 = 034; // восьмеричное число (28 в десятичной)
$num_16 = 0x1C; // шестнадцатиричное число (28 в десятичной)

echo "num_10 = $num_10<br>";
echo "num_2 = $num_2<br>";
echo "num_8 = $num_8<br>";
echo "num_16 = $num_16";

// bool
$foo = true;
$boo = false;

echo "<br>$foo <br>";

// тип string
$a = 10;
$b = 5;
$result = "$a+$b <br>";
echo "$result<br>";
$result = '$a+$b';
echo "$result<br>";

// Вывод кавычек в PHP
$text = "Модель \"Apple II\"";
echo "$text<br>";

// Специальное значение null
$q = null;
echo "q = $q";

// Динамическая типизация
$id = 123;
echo "<p>id = $id</p>";
$id = "asdlasldked";
echo "<p>id = $id</p><br>";

?>


</body>
</html>