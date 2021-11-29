Тонкое место return <br>
После того, как выполнится инструкция return - функция закончит свою работу. То есть: после выполнения return больше никакой код не выполнится.

function func($num)<br>
{<br>
return $num * $num;<br>
<br>
echo '!'; // этот код никогда не выполнится<br>
}<br>
$result = func(3);<br>


<?php
function func($num)
{
    return $num * $num;

    echo '!'; // этот код никогда не выполнится
}

$result = func(3);
?>