<?php
function bar()
{
    $foo = 'bar';
    $bar = 10;
    echo $$foo;
}
bar();