<?php
try
{
    $a = 5;
    $b = 0;
    $result = $a / $b;
    echo $result;
}
catch(DivisionByZeroError $ex)
{
    echo "Произошло исключение:<br>";
    echo $ex . "<br>";
}

try
{
    $result = 5 / 0;
    echo $result;
}
catch(ParseError $p)
{
    echo "Произошла ошибка парсинга" . "<br>";
}
catch(DivisionByZeroError $d)
{
    echo "На ноль делить нельзя"  . "<br>";
}
catch(ArithmeticError $ex)
{
    echo "Ошибка при выполнении арифметической операции";
}
catch(Error $ex)
{
    echo "Произошла ошибка";
}
catch(Throwable $ex)
{
    echo "Ошибка при выполнении программы";
}

echo "Конец работы программы"  . "<br>";