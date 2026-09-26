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
$name = "не определена";
$age = "не определена";
if (isset($_POST["name"])) {
    $name = $_POST["name"];
}
if (isset($_POST["age"])) {
    $age = $_POST["age"];
}
echo "Имя: $name <br> Возраст: $age <br>";

$name = "не определена";
$age = "не определена";
if (isset($_GET["name"])) {
    $name = $_GET["name"];
}
if (isset($_GET["age"])) {
    $age = $_GET["age"];
}
echo "Имя: $name <br> Возраст: $age <br>";
?>

</body>
</html>