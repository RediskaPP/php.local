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
// Оператор isset - позволяет определить, инициализирована ли переменная или нет.
$message = null;
if(isset($message))
    echo $message;
else
    echo "переменная message не определена";

// Функция empty - проверяет переменную на пустоту.
// Пустота - (null, 0, false, или пустая строка)
// в этом случае empty() возвращает true
$message = "";
if(empty($message))
    echo "<br>переменная message не определена";
else
    echo $message;

// unset - позволяет уничтожить переменную
unset($message);
echo "<br> $message <br>";
?>
</body>
</html>