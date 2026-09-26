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
// if - проверяет истинность условия, если истина - выполняется блок выражений
$a = 4;
if ($a > 0) {
    echo "Переменная a больше нуля";
}
echo "<br>конец выполнения программы";
// else - содержит инструкции, которые выполняются, если условие после if ложно (false)
$a = 4;
if ($a < 0) {
    echo "<br>Переменная а больше нуля";
} else
{
    echo "<br>Переменная a меньше нуля";
}
echo "<br>конец выполнения программы";
// elseif - вводит дополнительные условия в программу
$a = 5;
if ($a > 0) {
    echo "<br>Переменная а больше нуля";
} elseif ($a < 0)
{
    echo "<br>Переменная a меньше нуля";
}
else {
    echo "<br>конец выполнения программы";
}

// Альтернативный синтаксис if
$a = 5;
if ($a > 0):
    echo "<br>Переменная а больше нуля";
elseif ($a < 0):
    echo "<br>Переменная a меньше нуля";
else:
    echo "<br>конец выполнения программы";
endif;

?>

<!-- Комбинированный режим HTML и PHP -->
<?php
$a = 5;
?>

<?php if ($a > 0) { ?>
<h2>Переменная a больше нуля</h2>
<?php } ?>

<?php
// Тернарная операция
$a = 1;
$b = 2;
$z = $a < $b ? $a + $b : $a - $b;
echo $z;
?>

</body>
</html>