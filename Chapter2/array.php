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
$numbers = [1, 4, 9, 16];
// меняем значение в массиве
$numbers[1] = 6;
// добавляем элемент к массиву
$numbers[] = 25;
$numbers[5] = 32;
// вывод
echo "<br>$numbers[1]";
echo "<br>$numbers[4]";
echo "<br>$numbers[5]";
echo "<br>";
print_r($numbers);


$numbers1 = [1 => 1, 2 => 4, 5 => 25, 16];
echo "<br>$numbers1[6]";

// Перебор массива - c помощью for
$users = ["Tom", "Sam", "Bob", "Alice"];
$num = count($users);
for ($i = 0; $i < $num; $i++) {
    echo "<br>$users[$i]</br>";
}
// Перебор массива с разными индексами - c помощью foreach
$users1 = [1 => "Tom", 4 => "Sam", 5 => "Bob", 21 => "Alice"];
foreach($users1 as $element)
{
    echo "<br>$element</br>";
}
// Вывод ключей элементов
foreach($users1 as $key => $value)
{
    echo "<br>$key - $value</br>";
}
?>

<h2>Ассоциативные массивы</h2>

<?php
$countries = ["Germany" => "Berlin", "France" => "Paris", "Spain" => "Madrid"];
echo $countries["Spain"]; // Madrid
echo "<br>";
$countries["Spain"] = "Barcelona";
echo $countries["Spain"]; // Barcelona
// Добавление элемента с новым ключом в ассоциативный массив
$countries["Italy"] = "Rome"; // новый элемент
echo "<br>";
echo $countries["Italy"]; // Rome

// Перебор ассоциативного массива с помощью foreach
$words = ["red" => "красный", "blue" => "синий", "green" => "зеленый"];

foreach ($words as $english => $russian)
{
    echo "<br>$english - $russian</br>";
}

// Смешанные массивы
$data = [1 => "Tom", "id132" => "Sam", 56 => "Bob"];
echo "<br>$data[1]<br>";
echo $data["id132"];
?>


</body>
</html>