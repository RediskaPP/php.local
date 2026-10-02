<?php
$i = 1;

function func()
{
    global $i;

    echo $i;
    $i++;

    if ($i <= 10){
        func();
    }
}
func();
echo "<br>";
function func2($arr) {
    var_dump(array_shift($arr));
    var_dump($arr);

    if (count($arr) !== 0) {
        func2($arr);
    }
}

func2([1, 2, 3]);
echo "<br>";
function getSum($arr) {
    $sum = array_shift($arr);

    if (count($arr) !== 0) {
        $sum += getSum($arr);
    }

    return $sum;
}

var_dump(getSum([1, 2, 3]));
echo "<br>";
function getSum2($arr) {
    $sum = array_shift($arr);

    if (count($arr) !== 0) {
        $sum += getSum($arr);
    }

    return $sum;
}

$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

var_dump(getSum2($arr));

function func3($arr) {
    foreach ($arr as $elem) {
        if (is_array($elem)) {
            func($elem);
        } else {
            echo $elem;
        }
    }
}

func3([1, [2, 7, 8], [3, 4, [5, [6, 7]]]]);

echo "<br>";
function func4($arr) {
    foreach ($arr as $elem) {
        if (is_array($elem)) {
            func4($elem);
        } else {
            echo $elem . ' ';
        }
    }
}

$arr = [1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]];

func4($arr);
echo "<br>";
function func5($arr) {
    $sum = 0;

    foreach ($arr as $elem) {
        if (is_array($elem)) {
            $sum += func5($elem);
        } else {
            $sum += $elem;
        }
    }

    return $sum;
}

var_dump(func5([1, [2, 7, 8], [3, 4, [5, [6, 7]]]]));
echo "<br>";

function func6($arr) {
    $sum = 0;

    foreach ($arr as $elem) {
        if (is_array($elem)) {
            $sum += func6($elem);
        } else {
            $sum += $elem;
        }
    }

    return $sum;
}

$arr = [1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]];

var_dump(func6($arr));

echo "<br>";

function func7($arr) {
    $result = '';

    foreach ($arr as $elem) {
        if (is_array($elem)) {
            $result .= func7($elem);
        } else {
            $result .= $elem;
        }
    }

    return $result;
}

$arr = ['a', ['b', 'c', 'd'], ['e', 'f', ['g', ['j', 'k']]]];

var_dump(func7($arr));

echo "<br>";

function func8($arr) {
    $length = count($arr);

    for ($i = 0; $i < $length; $i++) {
        if (is_array($arr[$i])) {
            $arr[$i] = func8($arr[$i]);
        } else {
            $arr[$i] = $arr[$i] . '!';
        }
    }

    return $arr;
}

var_dump(func8([1, [2, 7, 8], [3, 4, [5, 6]]]));

echo "<br>";

function func9($arr) {
    $length = count($arr);

    for ($i = 0; $i < $length; $i++) {
        if (is_array($arr[$i])) {
            $arr[$i] = func9($arr[$i]);
        } else {
            $arr[$i] = $arr[$i] ** 2;
        }
    }

    return $arr;
}

$arr = [1, [2, 7, 8], [3, 4], [5, [6, 7]]];

var_dump(func9($arr));
