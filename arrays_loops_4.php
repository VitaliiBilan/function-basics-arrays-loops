<?php
function arr($arr)
{
    foreach ($arr as $key => $value){
        echo "{$key} <br>";
    }
    foreach ($arr as $value){
        echo "{$value} <br>";
    }
}
arr([
    'green'=>'зеленый',
    'red'=>'красный',
    'blue'=>'голубой'
]);