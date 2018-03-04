<?php
    function day($a, $b)
    {
        if ($a < $b){
            return $a;
        } else {
            return $b;
        }
    }
    $c = day(10, 20);
    echo $c;