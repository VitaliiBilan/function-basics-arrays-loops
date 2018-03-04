<?php

function maxAB($a, $b)
{
    if ($a > $b) {
        return $a;
    }

    return $b;
}
var_dump(maxAB(5, 10));

