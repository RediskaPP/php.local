<?php

/*
public - свойства и методы, объявленные с данным модификатором, можно обращаться
из внешнего кода и из любой части программы

protected - свойства и методы с данным модификатором доступны из текущего класса,
а также из классов- наследников

private - свойства и методы с данным модификатором доступны только из текущего класса
*/
class Person {
    private $privateA = "private";
    public $publicA = "public";
    protected $protectedA = "protected";

    private function getPrivateMethod()
    {
        echo "private method <br/>";
    }
    protected function getProtectedMethod()
    {
        echo "protected method <br/>";
    }
    public function getPublicMethod()
    {
        echo "public method <br/>";
    }
    function test()
    {
        $this->getPrivateMethod();
        $this->getProtectedMethod();
        $this->getPublicMethod();

        echo "$this->privateA<br>";
        echo "$this->protectedA<br>";
        echo "$this->publicA<br>";
    }
}
class Employee extends Person {
    function test()
    {
        // echo $this->privateA; // нельзя, так как privateA - является приватным
        echo $this->protectedA;
        echo $this->publicA;
        // echo $this->privateA; // нельзя, так как private в классе-родителе
        $this->getProtectedMethod();
        $this->getPublicMethod();
    }
}
$person = new Person;
//$person->getPrivateMethod(); недоступин - Private
//$person->getProtectedMethod(); недоступин - Protected
$person->getPublicMethod();

echo $person->publicA;

class Account{
    private $sum = 0;

    function __construct($sum)
    {
        $this->sum = $sum;
    }
    function getSum($otherAccount, $money)
    {
        $otherAccount->sum += $money;
        $this->sum += $money;
    }
    function printSum()
    {
        echo "На счете $this->sum y. e. <br>";
    }
}
$acc1 = new Account(100);
$acc2 = new Account(400);

$acc1->getSum($acc2,200);
$acc1->printSum();
?>