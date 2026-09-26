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
$users = [];
if (isset($_GET["users"])) {
    $users = $_GET["users"];
}
echo "В массиве " . count($users) . " элемента/ов<br>";
foreach($users as $user) echo "$user<br>";



if (isset($_POST["users"])) {
    $users = $_POST["users"];
    echo "<br>В массиве " . count($users) . " элемента/ов<br>";
    foreach($users as $user) echo "$user<br>";
}
?>
<h3>Форма ввода данных</h3>
<form method="POST">
    <p>User 1: <input type="text" name="users[]" /></p>
    <p>User 2: <input type="text" name="users[]" /></p>
    <p>User 3: <input type="text" name="users[]" /></p>
    <input type="submit" value="Отправить" />
</form>

</body>
</html>