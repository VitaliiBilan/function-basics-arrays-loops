<?php
function unName ()
{
    $day = 8;
    if ($day >=1 and $day <=7){
        echo 'Это день недели';
    } else
        echo 'Неизвестный день';
}

unName();