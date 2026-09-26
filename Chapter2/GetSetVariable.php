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
// функция gettype() - возвращает название типа переменной
$a = 10;
$b = "10";
echo gettype($a);
echo "<br>";
echo gettype($b);

// Представляет ли переменная определенный тип:
// is_integer($a) - возвращает значение true, если переменная $a хранит целое число
// is_string($a) - возвращает значение true, если переменная $a хранит строку
// is_double($a) - возвращает значение true, если переменная $a хранит действительное число
// is_numeric($a) - возвращает значение true, если переменная $a хранит целое или действ. число или строковым представлением числа
// is_bool($a) - возвращает значение true, если переменная $a хранит 0 или 1, (true или false)
// is_scalar($a) - возвращает значение true, если переменная $a представляет один из простых типов, логич. знач., целое число, действ. число
// is_null($a) - возвращает значение true, если переменная $a хранит значение null
// is_array($a) - возвращает значение true, если переменная $a является массивом
// is_object($a) - возвращает значение true, если переменная $a содержит ссылку на объект

// Установка типа. Функция settype() - позволяет установить для переменной определенный тип
$a = 10.7;
settype($a, "integer");
echo "<br>";
echo $a;

// Преобразование типов
$boolVar = false;
$intVar = (int)$boolVar;
echo "<br>boolVar = $boolVar<br>intVar = $intVar";
?>

</body>
</html>