<?php
print '<select name="doughnuts">';
for ($min = 1, $max = 10; $min < 50; $min += 10, $max += 10) {
    print "<option>\$min - \$max</option>\n";       //"<option>\$min - \$max</option>\n"- \ если будет рбратный слэш то будут max & min, а не цифры.
}
print '</select>';
