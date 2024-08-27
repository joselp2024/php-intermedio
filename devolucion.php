<?php



function suma($a, $b): int{
    return $a + $b;
}

echo suma(2,3);

echo"\n";


//tipo vacia
// function vacia($a, $b): void{
// }
// echo suma(2,3);


class Dummy{
    public $un_valor = "a";
}

function devo(Dummy $n1, int $n2):void{
    echo $n1->un_valor;
}

echo devo(new Dummy,3);

echo"\n";