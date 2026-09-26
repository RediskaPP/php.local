<?php
class Person {
    public $name, $age;
    static $retirementAge = 65;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    function sayHello() {
        echo "<br>Здарова заебал, меня зовут $this->name!<br>";
    }
    static function printPerson() {
        echo "Здарова заебал, меня зовут $person->name ! $person->age<br>";
    }
    function checkAge()
    {
        if($this->age >= self::$retirementAge)
            echo "<br>Пора на сво<br>";
        else
            echo "<br>До сво<br>" . (Person::$retirementAge - $this->age) . "лет<br>";
    }
}
$tom = new Person("Tom", 65);
$tom->sayHello();
Person::printPerson();
echo "Пенпионный возраст: " . Person::$retirementAge . "<br>";

$tom->checkAge();