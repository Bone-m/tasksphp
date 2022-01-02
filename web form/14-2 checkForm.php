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
<form method="post" action="14 checkForm.php">
    Your Order: <select name="order">
        <option>Sesame Seed Puff</option>
        <option>Coconut Milk Gelatin Square</option>
        <option>Brown Sugar Cake</option>
        <option>Sweet Rice and Meat</option>
    </select>
    <br/>
    <input type="submit" value="Order">
</form>
<?
$input['order'] = $_POST['order'];
if (! in_array($input['order'], $GLOBALS['sweets'])) {
    $errors[] = 'Please choose a valid order.';
}
?>
</body>
</html>