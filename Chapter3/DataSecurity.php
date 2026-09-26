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

// htmlentities - экранирует значения
// htmlspecialchars() - экранирует значения, похожа на htmlentities
// strip_tags() - позволяет полностью исключить теги html
$name = "не определена";
$age = "не определена";
if (isset($_POST["name"])) {
    $name = htmlentities($_POST["name"]);
}
if (isset($_POST["age"])) {
    $age = htmlentities($_POST["age"]);
}
echo "Имя: $name <br> Возраст: $age <br>";
?>
<h3>Другая форма ввода данных</h3>
<form method="POST">
    <p>Имя: <input type="text" name="name"/></p>
    <p>Возраст: <input type="number" name="age"/></p>
    <input type="submit" value="Отправить">
</form>

</body>
</html>