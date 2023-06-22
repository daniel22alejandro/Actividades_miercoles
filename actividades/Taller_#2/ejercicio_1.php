<?php

// Solicitar al usuario que ingrese un número
echo "Ingrese un número: ";
$numero = readline();

// Comparar el número ingresado con 10
if ($numero > 10) {
    echo "El número ingresado es mayor que 10.";
} elseif ($numero < 10) {
    echo "El número ingresado es menor que 10.";
} else {
    echo "El número ingresado es igual a 10.";
}

?>
