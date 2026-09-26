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
    $a = 4;
    if ($a == 4) {
        echo "4=<br>";
    } else {
        echo "tamtotam <br>";
    }

    if($a > 4) {
        echo "4>";
    } elseif($a == 4) {
        echo "4=";
    } else {
        echo "4<";
    }
?>
<?php
    $a = 5;
?>

<?php if($a > 5) { ?>
<h2>popa</h2>
<?php } ?>

<?php
    $a = 1;
    $b = 2;
    $z = $a < $b ? $a + $b : $a - $b;
?>
</body>
</html>