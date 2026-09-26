<?php

// Конструкторы представляют спец. методы, которые выполняются при
// создании объекта и служат для начальной инициализации его свойств.
class Person
{
    public $name, $age;
    function __construct($name="Том", $age=36)
    {
        $this->name = $name;
        $this->age = $age;
    }
    function displayInfo()
    {
        echo "Имя: $this->name; Возраст: $this->age;<br>";
    }
}
$tom = new Person("Mike", '32');
$tom->displayInfo();

$bob = new Person("Bob");
$bob->displayInfo();

$sam = new Person();
$sam->displayInfo();

// Деструкторы - служат для освобождения ресурсов, используемых
// программой - для освобождения открытых файлов,
// открытых подключений к базам данных и так далее.
class Person1
{
    public $name, $age;
    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    function getInfo()
    {
        echo "<br>Имя: $this->name; Возраст: $this->age<br>";
    }
    function __destruct()
    {
        echo "<br>Вызов деструктора<br>";
    }
}
$person1 = new Person1("Mike", "32");
$person1->getInfo();

$person2 = new Person1("Samuel", "20");
$person2->getInfo();
// Деструкторы вызовутся автоматически при завершении скрипта
// или когда переменные выходят из области видимости
unset($person1);
?>