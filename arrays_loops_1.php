<?php
function arr($arr)
{
   foreach ($arr as $item) {
        echo "{$item} <br>";
    }
}
arr(['html', 'css', 'php', 'js', 'jq']);