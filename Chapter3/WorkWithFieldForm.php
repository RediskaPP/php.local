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

Запомнить: <input type="checkbox" name="remember" value="1" />

<?php
if (isset($_POST["technologies"])) {
    $technologies = $_POST["technologies"];
    foreach($technologies as $item) echo "<br>$item<br>";
}
?>
<h3>Форма ввода данных</h3>
<form method="POST">
    <p>ASP.NET: <input type="checkbox" name="technologies[]" value="ASP.NET"/></p>
    <p>PHP: <input type="checkbox" name="technologies[]" value="PHP"/></p>
    <p>Node.js: <input type="checkbox" name="technologies[]" value="Node.js"/></p>
    <input type="submit" value="Отправить">
</form>

<?php
if (isset($_POST["course"])) {
    $course = $_POST["course"];
    echo "<br>$course<br>";
}
?>
<h3>Форма ввода данных</h3>
<form method="POST">
    <select name="course" size="1">
        <option value="ASP.NET">ASP.NET</option>
        <option value="PHP">PHP</option>
        <option value="Ruby">Ruby</option>
        <option value="Python">Python</option>
    </select>
    <input type="submit" value="Отправить">
</form>

</body>
</html>