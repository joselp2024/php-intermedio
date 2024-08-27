<?php

// $numbers = [1,2,3,4];

// $numbers_by_2 = array_map(function($current){ //current lo da la funcion array_map de php
//     return $current*2;
// }, $numbers);

// print_r( $numbers_by_2);


$name = "A";

$change_name = function()use ($name){
    echo $name;
};

$change_name();
echo"\n";



