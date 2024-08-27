<?php


// funciona para lectura de variabls en el ambito global
// $cajero = 0;
// $add_cajero = fn($add) => $cajero+$add;
// echo $add_cajero(20);
// echo"\n";


//no funciona para escritura de variables en el ambito global
// $cajero = 10;
// $add_cajero = fn($add) => $cajero+= $add;
// echo $add_cajero(20);
// echo $add_cajero(40);
// echo"\n";


$edades = [2,34,5,42,3];
// sin arrow function 

// $mayores_de_edad =  array_filter($edades , function($current){
//     return $current >= 18;
// });


//con arrow functionñ
$mayores_de_edad = array_filter($edades, fn($current)=> $current >= 18);
print_r($mayores_de_edad);

echo "\n";


$where_am_i = "Mexico";

$change_where_am_i = fn(&$where_am_i)=>$where_am_i = "Colombia";
$change_where_am_i($where_am_i);

echo $where_am_i;

echo "\n";
