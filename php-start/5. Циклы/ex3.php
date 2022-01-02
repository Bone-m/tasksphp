<?php
$butt = array ("Button 1", "Button 2","Button 3", "Button 4", "Button 5", "Button 6", "Button 7", "Button 8", "Button 9", "Button 10");
//echo (sort($butt));
natsort($butt);
foreach ($butt as $elem){
    echo "<a href=\"#\">$elem <hr>";
}
echo"<br> <hr>";
arsort($butt);
foreach ($butt as $el){
    echo "<a href=\"#\">$el <hr>";
}