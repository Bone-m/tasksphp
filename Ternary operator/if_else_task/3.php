<?php
function func($a, $b)
{
    if ($a === $b) {
        return true;
    } else {
        return false;
    }
}

var_dump(func(2, 4));
