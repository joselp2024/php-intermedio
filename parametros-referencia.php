<?php

$a = "1";

function show_number(&$b){
    $b = "2";
}

show_number($a);

echo $a;

echo "\n";