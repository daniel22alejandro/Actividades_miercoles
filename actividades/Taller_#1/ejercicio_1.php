<!-- Escriba un algoritmo que solicite su nombre y apellido por teclado, almacénelos en
variables diferentes, posteriormente imprímalos por pantalla en una sola línea con el
mensaje “BIENVENIDO nombre y apellido”. -->
<?php
$nom = readline("primer nombre \n");
$apell = readline("primer apellido \n");
$SALUDO = 'BIENVENIDO';

echo "$SALUDO $nom $apell";


?>