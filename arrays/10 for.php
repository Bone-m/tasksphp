<?php
// Пример 4.12. Перебор числового массива с помощью языковой конструкции for()
$dinner = array(
    ' Sweet Corn and Asparagus',
    'Lemon Chicken',
    'Braised Bamboo Fungus'
);
for ($i = 0; $i < count($dinner); $i++) {
    print "Dish number $i is $dinner[$i] '<br>'";
}
