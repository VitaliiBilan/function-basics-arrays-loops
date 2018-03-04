<?php
function x($a)
{
    while (strlen($a) <= 10) {
        echo "{$a}<br>";
        $a .= 'xx';
    }
}
x('xx');