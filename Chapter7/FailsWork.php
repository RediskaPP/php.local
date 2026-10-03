<?php
$fd = fopen("hello.txt", 'w') or die("не удалось создать файл");
$str = "Привет мир";
fputs($fd, $str);
fclose($fd);

echo "$fd";