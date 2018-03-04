<?php
function arr($arr)
    {
    foreach ($arr as $key => $val) {
        echo $key . ' —' . ' зарплата ' . $val . ' долларов.' . '<br>';
        }
    }
arr([
    'Коля' => 200,
    'Вася' => 300,
    'Петя' => 400
]);