<?php
function arr($arr)
    {
        foreach ($arr as $item) {
            echo "{$item}";
        }
    }
arr([1, 2, 3, 4, 5, 6, 7, 8, 9]);