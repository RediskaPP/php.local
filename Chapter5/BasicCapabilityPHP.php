<?php
include "welcome.php";
include_once "welcome.php";

//require "welcome.php";
//require_once "welcome.php";

$name = "John";
welcome($name);

function my_autoloader($class)
{
    echo " my ";
    include $class . ".php";
}
spl_autoload_register("my_autoloader");

$tom = new Person("Tom", 25);
$tom->PrintInfo();