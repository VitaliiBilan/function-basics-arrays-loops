<?php
function enRu($arr)
{
    $en = [];
    $ru = [];
    foreach ($arr as $itemEn => $itemRu) {
        $en[] = $itemEn;
        $ru[] = $itemRu;
    }
    echo '<pre>';
    print_r($en);
    echo '</pre>';

    echo '<pre>';
    print_r($ru);
    echo '</pre>';
}
enRu([
    'green'=>'зеленый',
    'red'=>'красный',
    'blue'=>'голубой'
]);