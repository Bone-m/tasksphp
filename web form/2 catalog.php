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
Пример 7.5. Доступ к нескольким значениям элемента формы
<form method="POST" action="2 catalog.php">
    <select name="lunch[]"  multiple>
        <option value="pork">BBQ Pork Bun</option>
        <option value="chicken">Chicken Bun</option>
        <option value="lotus">Lotus Seed Bun</option>
        <option value="bean">Bean Paste Bun</option>
        <option value="nest">Bird-Nest Bun</option>
    </select>
    <input type="submit" name="submit">
</form>
Selected buns:
<br/>
<?php
if (isset($_POST["lunch"])) {
    foreach ($_POST["lunch"] as $choice) {
        echo $choice
        ;
    }        echo "</n>You want a". $choice ." bun. <br>";

}
?>

</body>
</html>