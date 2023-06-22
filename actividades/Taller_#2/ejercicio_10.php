<?php
$año = readline("Ingrese un año:\n");

if (($año % 4 == 0 && $año % 100 != 0) || $año % 400 == 0):
echo "Es bisiesto\n";
 
else:
echo "No es bisiesto\n";
endif;
?>