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
<h2>Анкета</h2>
<form action="FormProcessing.php" method="POST">
    <p>Введите имя:<br>
    <input type="text" name="firstname"/></p>
    <p>Форма обучения<br>
        <input type="radio" name="eduform" value="очно"/>очно<br>
        <input type="radio" name="eduform" value="заочно"/>заочно</p>
    <p>Требуется общежитие: <br>
    <input type="checkbox" name="hostel"/>Да</p>
    <p>Выберите курсы: <br>
    <select name="courses[]" size="5" multiple="multiple">
        <option value="ASP.NET">ASP.NET</option>
        <option value="PHP">PHP</option>
        <option value="Ruby">Ruby</option>
        <option value="Python">Python</option>
        <option value="Java">Java</option>
    </select></p>
    <p>Краткий комментарий: <br>
    <textarea name="comment" maxlength="200"></textarea></p>
    <input type="submit" value="Отправить">
</form>

<?php
if(isset($_POST["firstname"]) && isset($_POST["eduform"]) &&
    isset($_POST["comment"]) && isset($_POST["courses"]))
{
    $name = htmlentities($_POST["firstname"]);
    $eduform = htmlentities($_POST["eduform"]);
    $hostel = "нет";
    if(isset($_POST["hostel"])) $hostel = "Да";
    $comment = htmlentities($_POST["comment"]);
    $courses = $_POST["courses"];
    $output = "
    Вас зовут: $name<br>
    Форма обучения: $eduform<br>
    Требуется общежитие: $hostel<br>
    Выбранные курсы:
    <ul>";
            foreach($courses as $item)
                $output .= "<li>" . htmlentities($item) . "</li>";
            $output .= "</ul>";
            echo $output;
}
else
{
    echo "Введенные данные некорректны";
}
?>
</body>
</html>