<?php
function quantity($arr)
{
    $count = 0;
    foreach ($arr as $value) {
        $count++;
    }
    echo $count;
}
quantity([4, 2, 5, 19, 13, 0, 10]);