<?php

$array= array(
    array('name'=>'Телевизор','price'=>'400','quantity'=>1),
    array('name'=>'Телефон','price'=>'300','quantity'=>3),
    array('name'=>'Кроссовки','price'=>'150','quantity'=>2),
    );
function functSum($array){
    $result=0;
    $res= 0;
foreach ($array as $ar){
    $result +=  $ar['price']*$ar['quantity'];
    $res += ($ar["quantity"]);
        }
    echo "Общее количество выбранных товаров " . $res . "<br>";

    echo "Общую сумму покупок " . $result;
}
functSum($array);
