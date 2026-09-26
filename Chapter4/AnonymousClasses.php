<?php
// Анонимный класс
$person = new class {
    public $name;
    function sayHello() {
        echo "Hello!<br>";
    }
};
$person->sayHello();
$person->name = "Sam";
echo "Имя: " . $person-> name . "<br>";

// Также анонимный классы могут определять конструкторы
$person = new class("Bob", 34) {
    function __construct(public $name, public $age) {
        $this->name = $name;
    }
    function displayInfo() {
        echo "Имя: $this->name; Возраст: $this->age<br>";
    }
};
echo "Hello, " . $person->name . "<br>";
$person -> displayInfo();

?>