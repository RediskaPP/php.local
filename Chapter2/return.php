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
function add($a, $b) {
    return $a + $b;
    echo "sum = $sum"; // эта строка не будет выполняться после инструкции return
}
$result = add(5, 6);
echo $result;

function add1($a, $b) {
    $sum = $a + $b;
    echo "sum = $sum<br/>";
}
$result = add1(5, 6);

if ($result === null)
{
    echo "result равен null<br/>";
} else {
    echo "result не равен null<br/>";
}
?>


</body>
</html>