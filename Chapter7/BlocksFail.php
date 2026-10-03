<?php
$fd = fopen("hello.txt", 'r+') or die("Ошибка открытия файла");
$str = "Hello World!";

if (flock($fd, LOCK_EX))
{
    ftruncate($fd, 0);
    fwrite($fd, "$str") or die("Ошибка записи");
    flock($fd, LOCK_UN);
}
fclose($fd);