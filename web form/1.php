<?php
//В элемент $_SERVER['REQUEST_METHOD'] помещается метод
// запроса, который применяется для вызова скрипта: GET
// или POST.
if ('POST' == $_SERVER['REQUEST_METHOD']) {
    print "Hello, ". $_POST['my_name'];
} else {
    print<<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
Your name: <input type="text" name="my_name" >
<br>
<input type="submit" value="Say Hello">
</form>
_HTML_;
}