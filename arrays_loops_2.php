<?php
function sum($a)
{
    $result = 0;
    foreach ($a as $elements){
        $result = $result + $elements;
    }
    echo $result;
}
sum([1, 20, 15, 17, 24, 35]);