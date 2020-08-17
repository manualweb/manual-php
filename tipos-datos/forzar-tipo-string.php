<?php

$valor_booleano = true;
$valor_entero = 1234;
$valor_float = 1234e-3; 

echo 'Valor booleano '.(string)$valor_booleano.'<br>';
echo 'Valor entero '.(string)$valor_entero.'<br>';
echo 'Valor float '.(string)$valor_float.'<br>';

echo 'Valor booleano '.strval($valor_booleano).'<br>';
echo 'Valor entero '.strval($valor_entero).'<br>';
echo 'Valor float '.strval($valor_float).'<br>';


?>