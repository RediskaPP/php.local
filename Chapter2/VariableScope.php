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
$condition = true;
if($condition){
    $name = "Tom";
}
echo $name;

$i = 6;
switch($i){
    case 5: $name = "Tom"; break;
    case 6: $name = "Bob"; break;
    default: $name = "Sam"; break;
}
echo "<br>";
echo $name;

// Локальные переменные - создаются внутри функции.
// К таким переменным можно обратиться только изнутри данной функции

function showName(){
    $name1 = "Tom";
    echo $name1;
}
echo "<br>";
showName();
// echo $name1; // так написать нельзя, так как переменная $name1 существует
             // только внутри функции showName

// Статические переменные
function getCounter()
{
    static $counter = 0;
    $counter++;
    echo $counter;
}
getCounter(); // 1
getCounter(); // 2
getCounter(); // 3

// Глобальные переменные - по умолчанию не доступны внутри функции
// "global" - позваляет обратиться внутри функции к глобальной переменной
$name2 = "Tom";
function hello()
{
    global $name2;
    echo "<br>Hello " . $name2;
}
hello();
function changeName()
{
    global $name2;
    $name2 = "Tomas";
}
changeName();
echo "<br>";
echo $name2;

// "$GLOBALS" - исп-ся для обращения к глобальным переменным, является встроенным массивом
$name = "Tom";
function changeName2() {
    $username = $GLOBALS['name'];
    echo "<br>Старое имя: $username<br>";
    // изменяем значение переменной $name
    $GLOBALS['name'] = "Tomas";
}
changeName2();
echo "<br>Новое имя: " . $name;
?>

</body>
</html>