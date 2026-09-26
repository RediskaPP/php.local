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
class Person
{
    public $name, $age, $height = 175;
    function hello()
    {
        echo "Hello!<br>";
    }
}

$tom = new Person();
$tom->name = "Tom"; // установка свойства $name
$tom->age = 20; // установка свойства $age
$personName = $tom->name; // получение значения свойства $name
echo "Имя пользователя: " . $personName . "<br>";
echo "Возраст пользователя: " . $tom->age . "<br>";
echo "Рост пользователя: " . $tom->height . "<br>";
$tom->hello(); // вызов метода hello()
print_r($tom);

// this - используется для обращения к свойствам
// и методам объекта внутри его класса
class Person1
{
    public $name, $age;
    function displayInfo()
    {
        echo "<br>Имя: " . $this->name . "; Возраст: " . $this->age . "<br>";
        // также можно написать
        echo "Имя: $this->name; Возраст: $this->age<br>";
    }
}
$tom = new Person1();
$tom->name = "Tom";
$tom->age = 42;
$tom->displayInfo();

$tomas = new Person1();
$tomas->name = "Tom";
$tomas->age = 42;

// сравнение объектов
// "==" - два объекта считаются равными, если они представляют один и тот же класс
// и их свойства имеют одинаковые значения.

// "===" - два объекта считаются равными, если обе переменных классов указывают
// на один и тот же экземпляр класса

if($tom == $tomas) echo "<br>переменные tom и tomas равны<br>";
else
    echo "<br>переменные tom и tomas НЕ равны<br>";

if($tom === $tomas) echo "<br>переменные tom и tomas эквивалентны<br>";
else
    echo "<br>переменные tom и tomas НЕ эквивалентны<br>";
?>


</body>
</html>