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
<!-- Одиночная загрузка файла -->
<?php
if ($_FILES && $_FILES["filename"]["error"]==UPLOAD_ERR_OK)
{
    $name = "upload/" . $_FILES["filename"]["name"];
    move_uploaded_file($_FILES["filename"]["tmp_name"], $name);
    echo "Файл загружен";
}
?>
<h2>Загрузка файла</h2>
<form method="POST" enctype="multipart/form-data">
    Выберите файл: <input type="file" name="filename" size="10" /><br/><br/>
    <input type="submit" value="Загрузить"/>
</form>

<!-- Множественная загрузка (мультизагрузка) -->
<?php
if($_FILES)
{
    foreach ($_FILES["uploads"]["error"] as $key => $error) {
        if ($error == UPLOAD_ERR_OK) {
            $tmp_name = $_FILES["uploads"]["tmp_name"][$key];
            $name = $_FILES["uploads"]["name"][$key];
            move_uploaded_file($tmp_name, "upload/" . $_FILES["uploads"]["name"][$key]);
        }
    }
    echo "Файлы загружены";
}
?>

<h2>Загрузка файлов</h2>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="uploads[]"/><br/>
    <input type="file" name="uploads[]"/><br/>
    <input type="file" name="uploads[]"/><br/>
    <input type="submit" value="Загрузить"/><br/>
</form>

<!--
 $_FILES - ассоциативный двухмерный массив
 $_FILES["file"]["name"] - имя файла
 $_FILES["file"]["type"] - тип содержимого файла, например image/jpeg
 $_FILES["file"]["size"] - размер файла в байтах
 $_FILES["file"]["tmp_name"] - имя временного файла, сохраненного на сервере
 $_FILES["file"]["error"] - код ошибки при загрузке
 -->



</body>
</html>