<?php
session_start();

$_SESSION["name"] = "Pidor";
$_SESSION["age"] = "52";

echo session_id();
echo session_name();

if(isset($_SESSION["name"]) && isset($_SESSION["age"])){
    $name = $_COOKIE["name"];
    $age = $_COOKIE["age"];
    echo "\n Name: $name\n Age: $age";
}