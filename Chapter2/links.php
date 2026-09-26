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
$tom = "Tom";
$sam = &$tom; // передача ссылки
$sam = "Sam";
echo "tom = $tom<br>";
echo "sam = $sam";

// Передача по ссылке
function square($a)
{
    $a *= $a;
    echo "<br>a = $a<br>";
}

$number = 5;
square($number);
echo "number = $number<br>";

// Передача параметра по ссылке
function square1(&$a)
{
    $a *= $a;
    echo "<br>a = $a<br>";
}

$number = 5;
square1($number);
echo "number = $number<br>";

// Возвращаение ссылки из функции
function &checkName(&$name)
{
    if($name === "admin") $name = "Tom";
    return $name;
}
$userName = "admin";
$checkedName = &checkName($userName);
echo "<br>userName = $userName<br>";
echo "<br>checkedName = $checkedName<br>";

?>

</body>
</html>