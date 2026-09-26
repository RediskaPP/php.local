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
function hello($name)
{
    echo "<h2>Hello " . $name . "</h2>";
}
hello("Tom");
hello("Bob");
hello("Sam");
hello("Jane");

function displayInfo($name, $age)
{
    echo "<div>Имя: $name <br/>Возраст: $age </div><hr>";
}

displayInfo("Tom", 36);
displayInfo("Bob", 23);
displayInfo("Sam", 28);

// Необязательные параметры
function displayInfo1($name, $age = 18)
{
    echo "<div>Имя: $name <br/>Возраст: $age </div><hr>";
}

displayInfo1("Tom", 12);
displayInfo1("Sam");

// Именованные параметры
function displayInfo2($name, $age = 18)
{
    echo "<div>Имя: $name <br/>Возраст: $age </div><hr>";
}
displayInfo2(age: 23, name: "Bob");
displayInfo2(name: "Tom", age: 36);
displayInfo2(name: "Alice");

// Переменное количество параметров
function sum (...$numbers)
{
    $result = 0;
    foreach($numbers as $number) {
        $result += $number;
    }
    echo "<p>Сумма: $result</p>";
}
sum(1, 2, 3);
sum( 2, 3);
sum( 4, 5, 10, 8);

function getAverageScore($name, ...$scores)
{
    $result = 0.0;
    foreach($scores as $score) {
        $result += $score;
    }
    $result = $result / count($scores);
    echo "<p>$name: $result</p>";
}
getAverageScore("Tom", 5, 5, 4, 5);
getAverageScore("Bob", 4, 3, 3, 4, 4);
?>

</body>
</html>