<?php
function num($n)
{
    $num = 0;
    while ($n >= 50){
        $n /= 2;
        $num ++;
    }
    echo "{$n}<br>";
    echo "{$num}<br>";
}
num(1000);