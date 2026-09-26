<?php
interface Messenger {
    function send();
}

interface EmailMessenger extends Messenger {

}

class SimpleMessenger implements EmailMessenger {
    function send()
    {
        echo "Отправка сообщения на электронную почту";
    }
}

$outlook = new SimpleMessenger();
$outlook->send();

interface Messenger1 {
    function send();
}

function sendMessage(Messenger1 $messenger, $text)
{
    $messenger->send($text);
}

class EmailMessenger1 implements Messenger1 {
    function send()
    {
        echo "Отправка сообщения на электронную почту";
    }
}

$outlook = new EmailMessenger1();
sendMessage($outlook, "Hello world!");

interface Camera {
    function  makeVideo();
    function  makePhoto();
}

interface Messenger2 {
    function sendMessage($message);
}

class Mobile implements Messenger2,Camera
{
    function makeVideo()
    {
        echo "<br>я пидор";
    }
    function makePhoto()
    {
        echo "<br>я пидорас";
    }
    function  sendMessage($message)
    {
        echo "<br>Отправка сообщений $message";
    }
}
$iphone = new Mobile();
$iphone->makeVideo();
$iphone->makePhoto();
$iphone->sendMessage("я пидорас сука ебанный с айфоном");