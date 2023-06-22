<?php
$numero = readline("Ingrese un número:\n"); 

if ($numero % 3 == 0 && $numero % 5 == 0):
    echo "Es divisible por 3 y por 5\n";
 elseif ($numero % 3 == 0):
    echo "Es divisible solo por 3\n";
 elseif ($numero % 5 == 0):
    echo "Es divisible solo por 5\n";
 else:
    echo "No es divisible ni por 3 ni por 5\n";
endif;
?>