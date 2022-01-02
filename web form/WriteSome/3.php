
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    process_form();
} else{
    show_form();
}
function process_form(){
    echo "Hello " . $_POST['my_name'];
}
function show_form(){
    print <<<_HTML_

<form method="POST" action="$_SERVER[PHP_SELF]">
My NAME: <input type="text" name="my_name"> </br>
<input type="submit" value="Say Hello">

</form>

_HTML_;

}
?>