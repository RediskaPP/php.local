<?php
class Company{
    public $name;
    function __construct($name){ $this->name = $name; }
}

class Person{
    public $name, $company;
    function __construct($name, $company)
    {
        $this->name = $name;
        $this->company = $company;
    }
    function __clone()
    {
        $this->company = clone $this->company;
    }
}
$pidoras = new Company("Pidoras");
$tom = new Person("Tom", $pidoras);
$bob = clone $tom;
$bob->name = "Bob";
$bob->company->name = "Google";
echo $tom->company->name . "<br>";