<?php
//bool setcookie(string $name, string $value, int $expire, string $path, string $domain, bool $secure, bool $httponly);

$name = "Pidor";
$age = 21;

setcookie("name", $name);
setcookie("age", $age, time() + 3600);
echo "\nПеченьки хочу\n";

if(isset($_COOKIE["name"])){
    echo $_COOKIE["name"];
}