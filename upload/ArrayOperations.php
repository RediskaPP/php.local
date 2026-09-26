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
// функция is_array - проверяет, является ли переменная массивом
$users = ["Tom", "Bob", "Sam"];
$isArray = is_array($users);
echo ($isArray==true)?"это массив":"это не массив";

// функции count/sizeof - получают количество элементов массива
$number = count($users);
// то же самое, что
// $number = sizeof($users)
echo "<br>В массиве users $number элемента/ов";

// функция shuffle - перемешивает элементы массива случайным образом
$users = ["Tom", "Bob", "Sam", "Alice", "Mike", "Paul"];
shuffle($users);
echo "<br>";
print_r($users);

// функция compact - позволяет создать из набора переменных ассоциативный массив, где ключи - их имена
$model = "Apple II";
$producer = "Apple";
$year = 1978;

$data = compact("model", "producer", "year");
echo "<br>";
print_r($data);

// Сортировка массивов
// asort - используется для сортировки по возрастанию
asort($users, SORT_STRING);
echo "<br>";
print_r($users);

// arsort - позволяет отсортировать массив в обратном порядке

// Сортировка по ключам - функция ksort
$states = ["Spain" => "Madrid", "France" => "Paris", "Germany" => "Berlin"];
asort($states);
echo "<br>";
print_r($states);
// массив после asort - сортировка по значениям элементов

ksort($states);
echo "<br>";
print_r($states);
// массив после ksort - сортировка по ключам элементов

// ksort() - сортировка по значениям элементов
// krsort() - сортировка по ключам в обратном порядке

// Естественная сортировка
$os = array("Windows 7", "Windows 8", "Windows 10");
natsort($os);
echo "<br>";
print_r($os);

// natsort() - выполняет естественную сортировку
// natcasesort() - выполняет сортировку без учитывания регистра
?>
</body>
</html>