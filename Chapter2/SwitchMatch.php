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
    <!--
    switch (выражение) {
    case значение1: действия; break;
    case значение2: действия; break;
    ............
    case значениеN: действия; break;
    -->

<?php
// switch - это выражение сопоставления значений
$a = 3;
switch($a)
{
    case 1:
        echo "сложение";
        break;
    case 2:
        echo "вычитание";
        break;
    case 3:
        echo "умножение";
        break;
    case 4:
        echo "деление";
        break;
    default:
        echo "действие по умолчанию";
        break;
}

echo "<br>";

// match - это выражение сопоставления значений, более улучшенная и безопасная версия switch
$a = 2;
$operation = match($a)
{
    1 => "сложение",
    2 => "вычитание",
    default => "действие по умолчанию",
};
echo $operation;

// Сравнение значений и типов
switch (8.0) {
    case "8.0":
        $result = "строка";
        break;
    case 8.0:
        $result = "число";
        break;
}
echo "<br> $result";

match (8.0) {
    "8.0" => $result = "строка",
    8.0 => $result = "число"
};
echo "<br> $result";
?>
</body>
</html>