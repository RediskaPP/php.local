<?php
abstract class Messanger
{
    protected  $name;
    function __construct($name)
    {
        $this->name = $name;
    }
    abstract function send($message);
    function close()
    {
        echo "Выход из мессанджера";
    }
}
class EmailMessanger extends Messanger
{
    function send($message)
    {
        echo "<br>$this->name отправляем сообщение: $message";
    }
}
$outlook = new EmailMessanger("Outlook");
$outlook->send("aaa");
$outlook->close();
