<?php

$outside_variable = "seria global";


function my_function(){
    global $outside_variable;
    echo $outside_variable;
}



my_function();

echo"\n";