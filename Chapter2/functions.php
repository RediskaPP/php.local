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

/*
function имя_функции([параметр [, ...]])
{
    // Инструкции
}
*/

hello();
function hello()
{
    echo "Hello World!";
}
// вызов функции
hello();
hello();
hello();


/* здесь будет ошибка
hello1();
if(true) {
    function hello1()
    {
        echo "Hello World!";
    }
    hello1();
}
*/
?>

</body>
</html>