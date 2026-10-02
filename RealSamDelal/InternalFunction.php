<?php
function func()
{
    $num = 1;
}

func();
//echo $num;    ойойой ошибочка, как и твоя жизнь хузупдцхоцлуцридищт

/*
function func($aaa) тут пизда
{
    $aaa = 222;
}

func(111);
echo $aaa; и тут тоже
*/

$num = 1;

function func2()
{
    //echo $num; ой блин ошибочка
}

func2();

$num1 = 1;
$num2 = 2;

function func3()
{
    //return $num1 + $num2; воу он тут рилли недоволен
}

echo func3();

$num = 1;

function func4()
{
    $num = 2; // френдзона
}

func4();
echo $num . "<br>";

$aaa = 111;

function func5()
{
    $aaa = 222;
    return $aaa;
}

echo func5() . "<br>";

$num = 1;

function func6()
{
    global $num; // объявляем глобальной
    $num = 2;
}

func6();
echo $num . "<br>";

$num = 1;

function func7()
{
    global $num;
    $num++;
}

func7();
echo $num . "<br>"; // во всех остальных тоже просто глобальным сделать надо

function func8($num)
{
    $num = 2;
}

$num = 1;
func8($num);
echo $num . "<br>";

$aaa = 'a';

function func9($bbb)
{
    $bbb = 'b';
}

func9($aaa);
echo $aaa  . "<br>";

$arr = [1, 2, 3, 4, 5];

function func10($arr)
{
    $arr[0] = '!';
}

func10($arr);
var_dump($arr);
echo "<br>";

function func11(&$num)
{
    $num = 2;
}

$num = 1;
func11($num);
echo $num . "<br>";

$num = 1;

function func12(&$num)
{
    $num++;
}

func12($num);
echo $num; // то же самое делаешь в других заданиях спина болеть не будет
