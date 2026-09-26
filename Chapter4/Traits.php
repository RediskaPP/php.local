<?php
trait Printer
{
    public function printSimpleText($text) { echo "<br>$text";}
    public function printHeaderText($text) { echo "<br>$text";}
}
class Message{
    use Printer;
}
$myMessage = new Message();
$myMessage->printSimpleText("pupa");
$myMessage->printHeaderText("zalupa");