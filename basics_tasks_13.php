<?php
function speedKm($s, $t)
{
    $kmPerHour = $s / $t;
    echo $kmPerHour;
}
speedKm(200, 2);

echo "<br>";

function speedM($s, $t)
{
    echo ($s * 1000) / ($t * 3600);
}
speedM(200, 2);