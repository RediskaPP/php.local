<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
$families = array(array("Tom", "Alice"), array("Bob", "Kate"));
$families = [["Tom", "Alice"], ["Bob", "Kate"]];
print_r($families[0]);
echo $families[0][0] . "<br/>"; // Tom
echo $families[0][1] . "<br/>"; // Alice
echo $families[1][0] . "<br/>"; // Bob
echo $families[1][1] . "<br/>";  // Kate
?>

<table>
<?php
// Перебор многомерного массива - с использованием foreach
$families1 = [["Tom", "Alice"], ["Bob", "Kate"], ["Sam", "Mary"]];
foreach ($families1 as $family) {
    echo "<tr>";
    foreach ($family as $user)
    {
        echo "<td>$user</td>";
    }
    echo "</tr>";
}
?>
</table>

<?php
// Вывод многомерного ассоциативного массива
$phones = array(
        "apple" => array("iPhone 12", "iPhone X", "iPhone 12 Pro"),
        "samsung" => array("Samsung Galaxy S20", "Samsung Galaxy S20 Ultra", "Samsung Galaxy S23 Pro"),
        "nokia" => array("Nokia 3310", "Nokia 8.3", "Nokia 8.3 Ultra")
);
foreach ($phones as $brand => $items)
{
    echo "<h3>$brand</h3>";
    echo "<ul>";
    foreach ($items as $key => $value)
    {
        echo "<li>$value</li>";
    }
    echo "</ul>";
}
// Получение определенных элементов массива
echo $phones["apple"][0];
echo "<br>";
echo $phones["nokia"][1];
?>

<?php
$gadgets = array(
        "phones" => array("apple" => "iPhone 12", "samsung" => "Samsung S20", "nokia" => "Nokia"),
        "tablets" => array("lenovo" => "Lenovo Yoga Smart Tab", "samsung" => "Samsung Tab S5", "apple" => "Apple iPad Pro")
);
$gadgets["phones"]["nokia"] = "Nokia 9";
foreach ($gadgets as $gadget => $items)
{
    echo "<h3>$gadget</h3>";
    echo "<ul>";
    foreach ($items as $key => $value)
    {
        echo "<li>$key => $value</li>";
    }
    echo "</ul>";
}
?>


</body>
</html>