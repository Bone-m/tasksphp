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
Пример 7.2. Двухэлементная форма<br>
<!--если переменные не были переданы методом POST, в примере 7.3
применяется нулеобъединяющая операция ??-->
<form method="POST" action="catalog.php">
    <input type="text" name="product_id">
    <select name="category">
        <option value="ovenmitt">Pot Holder</option>
        <option value="fryingpan">Frying Pan</option>
        <option value="torch">Kitchen Torch</option>
    </select>
    <input type="submit" name="submit">
    <br>Here are the submitted values:
    product_id: <?php print $_POST['product_id'] ?? '' ?>
    <br/>
    category: <?php print $_POST['category'] ?? '' ?>
</form>
</body>
</html>
