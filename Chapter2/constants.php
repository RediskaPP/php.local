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
// Оператор const - знак $ (в отличии от переменых) не используется
const PI = 2.1415 + 1;
echo PI;

// Функция define - исп-ся так же для определения константы
// define(string $name, string $value)
define("NUMBER", 22);
echo "<br>";
echo NUMBER;


// "Магические" константы
/*
    __FILE__ - хранит полный путь и имя текущего файла
    __LINE__ - хранит текущий номер строки, которую обрабатывает интерпретатор
    __DIR__ - хранит каталог текущего файла
    __FUNCTION__ - название обрабатываемой функции
    __CLASS__ - название текущего класса
    __TRAIT__ - название текущего трейта
    __METHOD__ - название обрабатываемого метода
    __NAMESPACE__ - название текущего пространства имен
    ::class/span> -  полное название текущего класса
*/
echo "<br>Строка " . __LINE__ . " в файле " . __FILE__;

// Проверка существования константы
const PI1 = 3.14;
if (!defined("PI1"))
    define("PI1", 3.14);
else
    echo "<br>Константа PI1 уже определена";
?>

</body>
</html>