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
//Пример 7.18. Отображение списка, размечаемого дескриптором <select>
$sweets = array('Sesame Seed Puff','Coconut Milk Gelatin Square', 'Brown Sugar Cake','Sweet Rice and Meat');
function generate_options($options) {
    $html = '';
    foreach ($options as $option) {
        $html .= "<option>$option</option>\n";
    }
    return $html;
}
// отобразить форму
function show_form() {
    $sweets = generate_options($GLOBALS['sweets']);
    print<<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
    Your Order: <select name="order">$sweets</select><br/>
<input type="submit" value="Order">
</form>
_HTML_
    ;}
?>
</body>
</html>

