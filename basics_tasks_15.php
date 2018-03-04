<?php
function calculator($a, $b, $operator)
{
    if ($operator = '+') {
        echo $a + $b;
    } elseif ($operator = '-') {
        echo $a - $b;
    } elseif ($operator = '*') {
        echo $a * $b;
    } elseif ($operator = '/') {
        echo $a / $b;
    } elseif ($operator = '%') {
        echo $a % $b;
    }
}
calculator(10, 5, '*');