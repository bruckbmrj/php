<?php 

$a = NULL;
$b = 8;
$c = 10;

// mostra o resultado, se a variavel for nula ele mostra o proximo, e assim em diante.
echo $a ?? $b ?? $c;

?>