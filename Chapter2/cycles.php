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

<!--

 for ([инициализация счетчика]; [условие]; [изменение счетчика]
 {
     // действия
 }

 -->

<?php
// for - это конструкция для повторения блока кода заданное количество раз
for ($i = 1; $i < 10; $i++) {
    echo "Квадрат числа $i равен " . $i * $i . "<br/>";
}

// Несколько переменных for
for ($i = 1, $j = 1; $i + $j < 10; $i++, $j++)
{
    echo "<br/> $i + $j = " . $i + $j . "<br/>";
}
// while - проверяет истинность некоторого условия, и если условие истинно, то выполняются блок выражений цикла
$counter = 1;
while($counter < 10)
{
    echo $counter * $counter . "<br/>";
    $counter++;
}

// do..while - выполняется блок цикла, только потом выполняется проверка условия
$counter = 1;
do {
    echo $counter * $counter . "<br/>";
    $counter++;
}
while($counter < 10);

// Операторы continue и break
// break - выход из цикла
for ($i = 1; $i < 10; $i++) {
    $result = $i * $i;
    if ($result > 80)
    {
        break;
    }
    echo "Квадрат числа $i равен $result<br/>";
}
echo "<br/>";
// continue - осуществляет переход к следующей итерации цикла
for ($i = 1; $i < 10; $i++) {
    if($i==5)
    {
        continue;
    }
    echo "Квадрат числа $i равен " . $i * $i . "<br/>";
}


?>

<table>
<?php
// Вложенные циклы
for ($i = 1; $i < 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j < 10; $j++)
    {
        echo "<td>" . $i * $j . "</td>";
    }
    echo "</tr>";
}
?>
</table>

</body>
</html>