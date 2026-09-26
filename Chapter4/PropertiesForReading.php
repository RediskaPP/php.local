<?php
class Person {
    public $name, $age;
    const maxAge = 110;

    function __construct($name, $age) {
        $this->name = $name;
        if($age > Person::maxAge) $age = Person::maxAge;
        $this->age = $age;
    }
    function print()
    {
        echo "Name: " . $this->name . "\n Age: " . $this->age . "\n";
    }
}
$tom = new Person("Tom", "20");
$bob = new Person("Bob", "120");
$tom->print();
$bob->print();
echo "Pisor: " . Person::maxAge . "\n";