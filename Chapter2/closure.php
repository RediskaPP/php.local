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
$number = 89;

$showNumber = function() use ($number)
{
    echo $number;
};
$showNumber();

$a = 8;
$b = 10;

$closure = function($c) use($a, $b)
{
    return $a + $b + $c;
};
$result = $closure(22);
echo $result;
?>

</body>
</html>