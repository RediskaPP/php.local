<?php
class Person
{
    public $name;
    function __construct($name)
    {
        $this->name = $name;
    }
    function displayInfo()
    {
        echo "Имя: $this->name<br>";
    }
}
class Employee extends Person // extends - наследуется
{}
$tom = new Employee("Tom");
$tom->displayInfo();

// Переопределение функционала родительского элемента
class Employee1 extends Person
{
    public $company;
    function __construct($name, $company)
    {
        // $this->name = $name;
        parent::__construct($name); // parent - обращение к родительскому классу
        $this->company = $company;
    }
    function displayInfo()
    {
        // echo "Имя: $this->name<br>";
        Person::displayInfo(); // Person - наименование родительского
        echo "Работает в $this->company<br>";
    }
}
$tom1 = new Employee1("Tom", "Microsoft");
$tom1->displayInfo();

class Manager{}
$tom2 = new Employee1("Alex", "Apple");

var_dump($tom2 instanceof Employee1); // выведет: bool(true)
var_dump($tom2 instanceof Person);    // выведет: bool(true), так как Employee1 наследуется от Person
var_dump($tom2 instanceof Manager);   // выведет: bool(false)
// var_dump - выводит подробную информацию о переменных
// instanceof - позволяет проверить принадлежность объекта определенному классу
// final - запрещает переопределение методов, указывается в классе-родителе


?>