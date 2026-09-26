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
        $a = 8 + 2;
        $a = 8 - 2;
        $a = 8 * 2;
        $a = 8 / 2;
        $a = 8 % 2;
        $a = 8 ** 2;

        $a = 12;
        $b = ++$a;
        echo "$a $b <br>";

        $b = $a++;
        echo "$a $b <br>";

        $a = (2 == "2");
        $b = (2 === "2");

        $a = 2 <=> 2;
        $b = 3 <=> 2;
        $c = 1 <=> 2;

        echo "$a $b $c <br>";

        $a = 10;
        $a *= 5;
        echo "<br>";
        echo $a;

    $a = 10;
    $a .= 5;
    echo "<br>";
    echo $a;

    $a = 10;
    $a %= 5;
    echo "<br>";
    echo $a;

    $a = 10;
    $a **= 5;
    echo "<br>";
    echo $a;

    $a = 10;
    $a |= 5;
    echo "<br>";
    echo $a;

    $a = 10;
    $a <<= 5;
    echo "<br>";
    echo $a;

    $a = 10;
    $a &= 5;
    echo "<br>";
    echo $a;
    ?>
</body>
</html>

