<?php


$valor_entero = 0;
$valor_booleano = (bool)$valor_entero;

var_dump($valor_entero);
var_dump($valor_booleano);

if ($valor_booleano):
    echo "Tengo el valor verdadero";
else:
    echo "Tengo el valor falso";
endif;


?>